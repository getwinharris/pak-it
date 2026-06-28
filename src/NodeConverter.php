<?php

class NodeConverter
{
    public function convert(string $dir): int
    {
        $count = 0;
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
        );
        foreach ($files as $file) {
            if ($file->getExtension() !== 'js') continue;
            $path = $file->getPathname();
            if (strpos($path, '/node_modules/') !== false) continue;

            $phpPath = preg_replace('/\.js$/', '.php', $path);
            $content = file_get_contents($path);
            $php = $this->convertCode($content);

            file_put_contents($phpPath, "<?php\n" . $php . "\n");
            unlink($path);
            $count++;
        }
        return $count;
    }

    public function convertCode(string $code): string
    {
        // First pass: extract all function/method params to know which names need $ prefix
        $localVars = $this->extractLocalVariables($code);

        // Second pass: convert JS to PHP
        $lines = explode("\n", $code);
        $result = [];
        $i = 0;

        while ($i < count($lines)) {
            $line = $lines[$i];
            $trimmed = trim($line);
            $indent = str_repeat(' ', strlen($line) - strlen(ltrim($line)));

            // Multi-line comments
            if (strpos($trimmed, '/*') === 0) {
                $result[] = $this->convertCommentBlock($lines, $i, $indent);
                continue;
            }

            // Single-line comments (but not JSDoc annotations)
            if (strpos($trimmed, '//') === 0) {
                $comment = substr($trimmed, 2);
                if ($comment[0] ?? '' !== '@') {
                    $result[] = $indent . '//' . $comment;
                } else {
                    $result[] = $indent . $trimmed;
                }
                $i++;
                continue;
            }

            // 'use strict'
            if (preg_match('/["\']use strict["\'];/', $trimmed)) {
                $i++;
                continue;
            }

            // Named function: function name(params) {
            if (preg_match('/^function\s+(\w+)\s*\(([^)]*)\)\s*(\{?)\s*$/', $trimmed, $m)) {
                $params = $this->convertParams($m[2]);
                $open = $m[3] ? ' {' : '';
                $result[] = $indent . 'function ' . $m[1] . '(' . $params . ')' . $open;
                $i++;
                continue;
            }

            // Anonymous function: return/assign function(params) {
            if (preg_match('/^(.{0,80}?\b(?:return|=\s*))\s*function\s*\(([^)]*)\)\s*(\{?)\s*$/', $trimmed, $m)) {
                $prefix = trim($m[1]) . ' ';
                $params = $this->convertParams($m[2]);
                $open = $m[3] ? ' {' : '';
                $result[] = $indent . $prefix . 'function(' . $params . ')' . $open;
                $i++;
                continue;
            }

            // Arrow function with block: (params) => {
            if (preg_match('/^(.{0,80}?(?:=\s*|return\s+|\(|,))\s*\(([^)]*)\)\s*=>\s*(\{?)\s*$/', $trimmed, $m)) {
                $prefix = trim($m[1]);
                $params = $this->convertParams($m[2]);
                $open = $m[3] ? ' {' : '';
                $result[] = $indent . $prefix . ' function(' . $params . ')' . $open;
                $i++;
                continue;
            }

            // --- var/let/const declarations ---
            if (preg_match('/^(?:var|let|const)\s+(.+)$/', $trimmed, $m)) {
                $rest = rtrim($m[1], ';');
                $parts = $this->splitTopLevelCommas($rest);
                foreach ($parts as $part) {
                    $part = trim($part);
                    if (empty($part)) continue;
                    if (preg_match('/^(\w+)\s*=\s*(.+)$/s', $part, $pm)) {
                        // Register as local var for $ prefixing
                        $localVars[$pm[1]] = true;
                        $val = $this->convertValue($pm[2], $indent);
                        $result[] = $indent . '$' . $pm[1] . ' = ' . $val . ';';
                    } else {
                        $localVars[$part] = true;
                        $result[] = $indent . '$' . $part . ' = null;';
                    }
                }
                $i++;
                continue;
            }

            // Normal expression line - convert inline patterns
            $converted = $this->convertExpressionLine($trimmed, $localVars, $indent);
            $result[] = $converted;
            $i++;
        }

        $output = implode("\n", $result);

        // Post-processing cleanup
        $output = $this->postProcess($output);

        return $output;
    }

    private function postProcess(string $code): string
    {
        $lines = explode("\n", $code);
        $result = [];

        foreach ($lines as $line) {
            $trimmed = trim($line);

            // Remove remaining `var `, `let `, `const ` that weren't caught
            if (preg_match('/^(var|let|const)\s+(.+)$/', $trimmed, $m)) {
                $line = str_replace($trimmed, '$' . $m[2], $line);
            }

            // Remove trailing commas before semicolons:  `require('./x'),` -> `require('./x');`
            $clean = rtrim($trimmed, ';');
            if (substr(rtrim($clean), -1) === ',') {
                $clean = rtrim(substr($clean, 0, -1));
                $line = str_replace($trimmed, $clean . ';', $line);
            }

            // Fix `require('./x'),` -> `require('./x');`
            $clean = $trimmed;
            if (preg_match('/^(.+?),\s*$/', $clean, $m)) {
                // Check if the comma is between require() calls (a = req(), b = req())
                // If so, it's a multi-var continuation that needs semicolon
                if (preg_match('/require/', $m[1])) {
                    $line = str_replace($trimmed, $m[1] . ';', $line);
                }
            }

            $result[] = $line;
        }

        return implode("\n", $result);
    }

    private function extractLocalVariables(string $code): array
    {
        $vars = [];
        // Find function params
        preg_match_all('/function\s*\(([^)]*)\)/', $code, $matches);
        foreach ($matches[1] as $paramList) {
            foreach (explode(',', $paramList) as $p) {
                $p = trim(preg_replace('/\s*=.*/', '', $p)); // remove defaults
                $p = trim(preg_replace('/^\{|\}$/', '', $p)); // remove destructuring
                $p = ltrim($p, '.');
                if ($p && preg_match('/^\w+$/', $p)) {
                    $vars[$p] = true;
                }
            }
        }
        // Find var/let/const declarations
        preg_match_all('/(?:var|let|const)\s+([^;]+);/', $code, $matches);
        foreach ($matches[1] as $stmt) {
            foreach (explode(',', $stmt) as $part) {
                $p = trim(explode('=', $part)[0]);
                if ($p && preg_match('/^\w+$/', $p)) {
                    $vars[$p] = true;
                }
            }
        }
        // Common JS globals that should NOT get $ prefix
        unset($vars['Math'], $vars['JSON'], $vars['Object'], $vars['Array']);
        unset($vars['Error'], $vars['TypeError'], $vars['console']);
        unset($vars['process'], $vars['Buffer'], $vars['setTimeout']);
        unset($vars['setInterval'], $vars['clearTimeout'], $vars['require']);
        unset($vars['module'], $vars['exports'], $vars['__dirname']);
        unset($vars['__filename'], $vars['global'], $vars['Number']);
        unset($vars['isFinite'], $vars['isNaN'], $vars['undefined']);
        unset($vars['null'], $vars['true'], $vars['false'], $vars['this']);
        unset($vars['Date'], $vars['RegExp'], $vars['Map'], $vars['Set']);
        unset($vars['WeakMap'], $vars['WeakSet'], $vars['Promise']);
        unset($vars['Symbol'], $vars['Reflect'], $vars['Proxy']);
        return $vars;
    }

    private function convertCommentBlock(array &$lines, int &$i, string $indent): string
    {
        $out = [$indent . trim($lines[$i])];
        $i++;
        while ($i < count($lines)) {
            $out[] = $indent . trim($lines[$i]);
            if (strpos($lines[$i], '*/') !== false) { $i++; break; }
            $i++;
        }
        return implode("\n", $out);
    }

    private function convertParams(string $params): string
    {
        if (trim($params) === '') return '';
        $parts = explode(',', $params);
        $result = [];
        foreach ($parts as $p) {
            $p = trim($p);
            if (empty($p)) continue;
            if (preg_match('/^(\w+)\s*(=\s*.+)?$/', $p, $m)) {
                $default = $m[2] ?? '';
                if ($default) $default = $this->convertInlineValue($default);
                $result[] = '$' . $m[1] . $default;
            } elseif (preg_match('/^\.\.\.(\w+)$/', $p, $m)) {
                $result[] = '...$' . $m[1];
            } elseif (preg_match('/^\{\s*(\w+)\s*\}$/', $p, $m)) {
                $result[] = '$' . $m[1];
            } else {
                $result[] = '$' . ltrim($p, '$');
            }
        }
        return implode(', ', $result);
    }

    private function splitTopLevelCommas(string $code): array
    {
        $parts = [];
        $depth = 0;
        $current = '';
        for ($i = 0; $i < strlen($code); $i++) {
            $ch = $code[$i];
            if (in_array($ch, ['(', '[', '{'])) $depth++;
            elseif (in_array($ch, [')', ']', '}'])) $depth--;
            elseif ($ch === ',' && $depth === 0) {
                $parts[] = $current;
                $current = '';
                continue;
            }
            $current .= $ch;
        }
        if (trim($current) !== '') $parts[] = $current;
        return $parts;
    }

    private function convertValue(string $value, string $indent): string
    {
        $value = trim($value);
        if (preg_match('/^require\s*\(\s*[\'"]([^\'"]+)[\'"]\s*\)$/', $value, $m)) {
            $path = preg_replace('/\.js$/', '.php', $m[1]);
            if ($path[0] === '.') {
                return "require __DIR__ . '" . substr($path, 1) . "'";
            }
            return "require '" . $path . "'";
        }
        return $this->convertInlineValue($value);
    }

    private function convertInlineValue(string $value): string
    {
        $value = trim($value);

        // Math.* conversion in inline values
        $value = preg_replace('/Math\.(\w+)/', '\\1', $value);
        $value = preg_replace('/Number\.isFinite/', 'is_finite', $value);
        $value = preg_replace('/\bisFinite\b/', 'is_finite', $value);
        $value = preg_replace('/Number\.isNaN/', 'is_nan', $value);
        $value = preg_replace('/\bisNaN\b/', 'is_nan', $value);

        // typeof conversion in inline values
        $value = preg_replace('/typeof\s+(\w+)\s*===\s*["\']number["\']/', 'is_numeric($$1)', $value);
        $value = preg_replace('/typeof\s+(\w+)\s*===\s*["\']string["\']/', 'is_string($$1)', $value);
        $value = preg_replace('/typeof\s+(\w+)\s*===\s*["\']undefined["\']/', '!isset($$1)', $value);

        // === null conversions
        $value = preg_replace('/===\s*undefined/', '=== null', $value);

        // Template literals
        $value = preg_replace_callback('/`((?:[^`\\$]|\\.|\$\{[^}]*\})*)`/', function ($m) {
            $inner = $m[1];
            $parts = preg_split('/(\$\{[^}]+\})/', $inner, -1, PREG_SPLIT_DELIM_CAPTURE);
            $out = '';
            foreach ($parts as $part) {
                if (preg_match('/^\$\{(.+)\}$/', $part, $v)) {
                    $out .= '" . ' . trim($v[1]) . ' . "';
                } else {
                    $out .= addcslashes($part, '"');
                }
            }
            return '"' . $out . '"';
        }, $value);
        return $value;
    }

    private function convertExpressionLine(string $code, array $localVars, string $indent): string
    {
        $hasSemi = (substr(rtrim($code), -1) === ';');
        $code = rtrim(rtrim($code), ';');

        // Math.* -> PHP native functions
        $code = preg_replace('/Math\.(\w+)/', '\\1', $code);

        // Number.* -> PHP native
        $code = preg_replace('/Number\.isFinite/', 'is_finite', $code);
        $code = preg_replace('/\bisFinite\b/', 'is_finite', $code);
        $code = preg_replace('/Number\.isNaN/', 'is_nan', $code);
        $code = preg_replace('/\bisNaN\b/', 'is_nan', $code);
        $code = preg_replace('/Number\.isInteger/', 'is_int', $code);
        $code = preg_replace('/\bisInteger\b/', 'is_int', $code);

        // typeof x === 'y' -> PHP type checks
        $code = preg_replace('/typeof\s+(\w+)\s*===\s*["\']undefined["\']/', '!isset($$1)', $code);
        $code = preg_replace('/typeof\s+(\w+)\s*===\s*["\']number["\']/', 'is_numeric($$1)', $code);
        $code = preg_replace('/typeof\s+(\w+)\s*===\s*["\']string["\']/', 'is_string($$1)', $code);
        $code = preg_replace('/typeof\s+(\w+)\s*===\s*["\']boolean["\']/', 'is_bool($$1)', $code);
        $code = preg_replace('/typeof\s+(\w+)\s*===\s*["\']function["\']/', 'is_callable($$1)', $code);
        $code = preg_replace('/typeof\s+(\w+)\s*===\s*["\']object["\']/', '(is_object($$1) || is_array($$1))', $code);
        $code = preg_replace('/typeof\s+(\w+)\s*!==\s*["\']undefined["\']/', 'isset($$1)', $code);

        // .method() calls need $ on the object (if bare identifier)
        $code = preg_replace_callback('/(?<!\$)(\w+)\.(trim|toString|toUpperCase|toLowerCase|split|replace|slice|concat|join|push|pop|indexOf|includes|startsWith|endsWith|padStart|padEnd|repeat)\(/', function($m) {
            return '$' . $m[1] . '.' . $m[2] . '(';
        }, $code);

        // .length -> count/strlen
        $code = preg_replace_callback('/(?<!\$)(\w+)\.length/', function($m) {
            return '(is_array($' . $m[1] . ') ? count($' . $m[1] . ') : strlen($' . $m[1] . '))';
        }, $code);
        $code = preg_replace_callback('/(\$\w+)\.length/', function($m) {
            return '(is_array(' . $m[1] . ') ? count(' . $m[1] . ') : strlen(' . $m[1] . '))';
        }, $code);

        // .trim() etc for already-prefixed vars
        $code = preg_replace('/(\$\w+)\.trim\(\)/', 'trim($1)', $code);
        $code = preg_replace('/(\$\w+)\.trim\(([^)]+)\)/', 'trim($1, $2)', $code);
        $code = preg_replace('/(\$\w+)\.toString\(\)/', '(string)($1)', $code);
        $code = preg_replace('/(\$\w+)\.toUpperCase\(\)/', 'strtoupper($1)', $code);
        $code = preg_replace('/(\$\w+)\.toLowerCase\(\)/', 'strtolower($1)', $code);
        $code = preg_replace('/(\$\w+)\.split\(([^)]+)\)/', 'explode($2, $1)', $code);
        $code = preg_replace('/(\$\w+)\.replace\(([^)]+)\)/', 'str_replace($2, $1)', $code);
        $code = preg_replace('/(\$\w+)\.join\(([^)]*)\)/', 'implode($2, $1)', $code);
        $code = preg_replace('/(\$\w+)\.join\(\)/', 'implode(\'\', $1)', $code);
        $code = preg_replace('/(\$\w+)\.slice\(([^)]*)\)/', 'array_slice($1, $2)', $code);
        $code = preg_replace('/(\$\w+)\.indexOf\(([^)]+)\)/', 'array_search($2, $1)', $code);
        $code = preg_replace('/(\$\w+)\.concat\(([^)]+)\)/', 'array_merge($1, $2)', $code);
        $code = preg_replace('/(\$\w+)\.push\(([^)]+)\)/', '$1[] = $2', $code);
        $code = preg_replace('/(\$\w+)\.pop\(\)/', 'array_pop($1)', $code);
        $code = preg_replace('/(\$\w+)\.includes\(([^)]+)\)/', 'in_array($2, $1)', $code);
        $code = preg_replace('/(\$\w+)\.test\(([^)]+)\)/', 'preg_match($1, $2)', $code);

        // Array.isArray, Object.keys, etc
        $code = preg_replace('/Array\.isArray\(/', 'is_array(', $code);
        $code = preg_replace('/\bArray\s*\((\d+)\)/', 'array_fill(0, $1, null)', $code);
        $code = preg_replace('/Object\.keys\(/', 'array_keys(', $code);
        $code = preg_replace('/Object\.values\(/', 'array_values(', $code);
        $code = preg_replace('/Object\.assign\(/', 'array_merge(', $code);
        $code = preg_replace('/JSON\.parse\(/', 'json_decode(', $code);
        $code = preg_replace('/JSON\.stringify\(/', 'json_encode(', $code);

        // === undefined, !== undefined
        $code = preg_replace('/===\s*undefined/', '=== null', $code);
        $code = preg_replace('/!==\s*undefined/', '!== null', $code);
        $code = preg_replace('/==\s*undefined/', '=== null', $code);
        $code = preg_replace('/!=\s*undefined/', '!== null', $code);

        // new Error -> new Exception
        $code = preg_replace('/new\s+Error\(/', 'new Exception(', $code);

        // console.* -> PHP output
        $code = preg_replace('/console\.log\s*\(/', 'echo (', $code);
        $code = preg_replace('/console\.error\s*\(/', 'fwrite(STDERR, (', $code);
        $code = preg_replace('/console\.warn\s*\(/', 'fwrite(STDERR, (', $code);

        // process.*
        $code = preg_replace('/process\.argv/', '$GLOBALS["argv"] ?? $argv', $code);
        $code = preg_replace('/process\.exit\((\d+)\)/', 'exit($1)', $code);
        $code = preg_replace('/process\.exit\(/', 'exit(', $code);
        $code = preg_replace('/process\.env\.(\w+)/', 'getenv("$1")', $code);

        // __dirname, __filename
        $code = str_replace('__dirname', '__DIR__', $code);
        $code = str_replace('__filename', '__FILE__', $code);

        // module.exports, exports.*
        $code = preg_replace('/module\.exports\s*=\s*/', 'return ', $code);
        $code = preg_replace('/exports\.(\w+)\s*=\s*/', '$$$1 = ', $code);

        // Add $ prefix to known local variables used in expressions
        $code = $this->prefixLocalVariables($code, $localVars);

        if ($hasSemi) $code .= ';';
        return $indent . $code;
    }

    private function prefixLocalVariables(string $code, array $localVars): string
    {
        if (empty($localVars) || empty($code)) return $code;

        // For each known local var, add $ prefix
        // Sort by length descending to avoid partial matches
        $vars = array_keys($localVars);
        usort($vars, function($a, $b) { return strlen($b) - strlen($a); });

        foreach ($vars as $var) {
            // Replace bare identifier with $identifier
            // Escape special regex chars in var name, put - at end of char class
            $quoted = preg_quote($var, '/');
            $pattern = '/(?<![\$\w>])' . $quoted . '(?![\$\w-])/';
            $replacement = '$' . $var;
            $result = @preg_replace($pattern, $replacement, $code);
            if ($result !== null) {
                $code = $result;
            }
        }
        return $code;
    }
}
