<?php

class AstConverter
{
    private array $localVars = [];
    private array $nesting = [];
    private string $nodeJsDir;
    private string $sourceDir;

    public function __construct()
    {
        $this->nodeJsDir = dirname(__DIR__) . '/ast';
    }

    public function convert(string $dir): int
    {
        $this->sourceDir = $dir;
        $count = 0;
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
        );
        foreach ($files as $file) {
            if ($file->getExtension() !== 'js') continue;
            $path = $file->getPathname();
            if (strpos($path, '/node_modules/') !== false) continue;

            $phpPath = preg_replace('/\.js$/', '.php', $path);
            $php = $this->convertCode($path);

            file_put_contents($phpPath, "<?php\n" . $php . "\n");
            unlink($path);
            $count++;
        }
        return $count;
    }

    public function convertCode(string $jsPath): string
    {
        // Call acorn parser to get AST, capturing stderr for diagnostics
        $cmd = sprintf(
            'node %s/parse.js %s 2>&1',
            escapeshellarg($this->nodeJsDir),
            escapeshellarg($jsPath)
        );

        exec($cmd, $lines, $exitCode);
        $output = implode("\n", $lines);

        // Distinguish parse failures from environment issues (Node.js not found, etc.)
        if ($exitCode !== 0 || $output === '') {
            $fallback = new NodeConverter();
            return $fallback->convertCode(file_get_contents($jsPath));
        }

        $ast = json_decode($output, true);
        if (!$ast || !isset($ast['type'])) {
            $fallback = new NodeConverter();
            return $fallback->convertCode(file_get_contents($jsPath));
        }

        // Pass 1: collect local variable names
        $this->localVars = [];
        $this->collectVariables($ast);

        // Pass 2: generate PHP code
        $this->nesting = [];
        $result = $this->walkStatements($ast['body'] ?? [], '');

        return $result;
    }

    private function indentOf(int $depth): string
    {
        return str_repeat('    ', $depth);
    }

    // ── Pass 1: Variable collection ──

    private function collectVariables(array $node): void
    {
        switch ($node['type']) {
            case 'FunctionDeclaration':
                // Collect function name as a local (functions are values in JS)
                if (isset($node['id']['name'])) {
                    $this->localVars[$node['id']['name']] = true;
                }
                // Fall through to also collect params + body
            case 'FunctionExpression':
            case 'ArrowFunctionExpression':
                // Collect params
                foreach ($node['params'] ?? [] as $p) {
                    $this->collectParamVars($p);
                }
                // Collect vars inside body
                if (isset($node['body'])) {
                    // Arrow function with expression body
                    if (isset($node['body']['type']) && $node['body']['type'] !== 'BlockStatement') {
                        $this->collectVariables($node['body']);
                    } else {
                        foreach ($node['body']['body'] ?? [] as $stmt) {
                            $this->collectVariables($stmt);
                        }
                    }
                }
                break;

            case 'VariableDeclaration':
                foreach ($node['declarations'] ?? [] as $decl) {
                    $this->collectVariableId($decl['id'] ?? []);
                    if (isset($decl['init'])) {
                        $this->collectVariables($decl['init']);
                    }
                }
                break;

            case 'VariableDeclarator':
                $this->collectVariableId($node['id'] ?? []);
                if (isset($node['init'])) {
                    $this->collectVariables($node['init']);
                }
                break;

            default:
                // Recurse into children
                foreach ($node as $key => $val) {
                    if ($key === 'loc' || $key === 'start' || $key === 'end') continue;
                    if (is_array($val)) {
                        foreach ($val as $item) {
                            if (is_array($item) && isset($item['type'])) {
                                $this->collectVariables($item);
                            }
                        }
                    }
                }
                break;
        }
    }

    private function collectParamVars(array $node): void
    {
        switch ($node['type']) {
            case 'Identifier':
                $this->localVars[$node['name']] = true;
                break;
            case 'AssignmentPattern':
                $this->collectParamVars($node['left'] ?? $node['id'] ?? []);
                if (isset($node['right'])) {
                    $this->collectVariables($node['right']);
                }
                break;
            case 'RestElement':
                $this->collectParamVars($node['argument'] ?? []);
                break;
            case 'ObjectPattern':
                foreach ($node['properties'] ?? [] as $prop) {
                    $this->collectParamVars($prop['value'] ?? $prop['argument'] ?? []);
                }
                break;
            case 'ArrayPattern':
                foreach ($node['elements'] ?? [] as $el) {
                    if ($el) $this->collectParamVars($el);
                }
                break;
        }
    }

    private function collectVariableId(array $node): void
    {
        switch ($node['type']) {
            case 'Identifier':
                $this->localVars[$node['name']] = true;
                break;
            case 'AssignmentPattern':
                $this->collectVariableId($node['left'] ?? $node['id'] ?? []);
                break;
            case 'RestElement':
                $this->collectVariableId($node['argument'] ?? []);
                break;
            case 'ObjectPattern':
                foreach ($node['properties'] ?? [] as $prop) {
                    $this->collectVariableId($prop['value'] ?? $prop['argument'] ?? []);
                }
                break;
            case 'ArrayPattern':
                foreach ($node['elements'] ?? [] as $el) {
                    if ($el) $this->collectVariableId($el);
                }
                break;
        }
    }

    // ── Pass 2: AST walkers ──

    private function walkStatements(array $stmts, string $indent): string
    {
        $lines = [];
        foreach ($stmts as $stmt) {
            $lines[] = $this->walkStatement($stmt, $indent);
        }
        return implode("\n", array_filter($lines, fn($l) => $l !== ''));
    }

    private function walkStatement(array $node, string $indent): string
    {
        switch ($node['type']) {
            case 'FunctionDeclaration':
                return $this->walkFunctionDeclaration($node, $indent);

            case 'VariableDeclaration':
                return $this->walkVariableDeclaration($node, $indent);

            case 'ExpressionStatement':
                // Detect module.exports = X -> convert to return statement
                if ($this->isModuleExportsAssignment($node['expression'])) {
                    return $this->walkModuleExports($node['expression'], $indent);
                }
                return $indent . $this->walkExpression($node['expression'], $indent) . ';';

            case 'ReturnStatement':
                if (isset($node['argument'])) {
                    return $indent . 'return ' . $this->walkExpression($node['argument'], $indent) . ';';
                }
                return $indent . 'return;';

            case 'IfStatement':
                return $this->walkIfStatement($node, $indent);

            case 'WhileStatement':
                $test = $this->walkExpression($node['test'], $indent);
                $body = $node['body']['type'] === 'BlockStatement'
                    ? $this->walkBlockBody($node['body']['body'] ?? [], $indent)
                    : $indent . '    ' . $this->walkStatement($node['body'], $indent . '    ');
                return $indent . 'while (' . $test . ') {' . ($body ? "\n" . $body . "\n" . $indent . '}' : '}');

            case 'ForStatement':
                return $this->walkForStatement($node, $indent);

            case 'ForInStatement':
            case 'ForOfStatement':
                return $this->walkForEachStatement($node, $indent);

            case 'BlockStatement':
                $body = $this->walkBlockBody($node['body'] ?? [], $indent);
                return $indent . '{' . ($body ? "\n" . $body . "\n" . $indent . '}' : '}');

            case 'EmptyStatement':
                return $indent . ';';

            case 'BreakStatement':
                return $indent . 'break;';

            case 'ContinueStatement':
                return $indent . 'continue;';

            case 'SwitchStatement':
                return $this->walkSwitchStatement($node, $indent);

            case 'TryStatement':
                return $this->walkTryStatement($node, $indent);

            case 'ThrowStatement':
                return $indent . 'throw ' . $this->walkExpression($node['argument'], $indent) . ';';

            default:
                // Try expression fallback
                $expr = $this->walkExpression($node, $indent);
                return $expr !== '' ? $indent . $expr . ';' : $indent . '// Unknown node: ' . $node['type'];
        }
    }

    private function walkFunctionDeclaration(array $node, string $indent): string
    {
        $name = $node['id']['name'] ?? '';
        $params = $this->walkParams($node['params'] ?? []);
        $body = $this->walkBlockBody($node['body']['body'] ?? [], $indent);

        // Avoid conflicts with PHP built-in classes
        $reserved = ['Hash', 'Map', 'Set', 'WeakMap', 'WeakSet', 'Promise',
            'Closure', 'DateTime', 'Exception', 'PDO', 'DOMDocument',
            'SimpleXMLElement', 'SplStack', 'SplFileInfo', 'Iterator',
            'Countable', 'ArrayAccess', 'Serializable', 'JsonSerializable',
            'RecursiveIteratorIterator', 'DirectoryIterator', 'PharData'];
        if (in_array($name, $reserved, true)) {
            $name = '_' . $name;
        }

        return $indent . 'function ' . $name . '(' . $params . ')' . ($body ? " {\n" . $body . "\n" . $indent . '}' : ' {}');
    }

    private function walkVariableDeclaration(array $node, string $indent): string
    {
        $decls = [];
        foreach ($node['declarations'] ?? [] as $decl) {
            $id = $this->walkExpression($decl['id'], $indent);
            if (isset($decl['init'])) {
                $init = $this->walkExpression($decl['init'], $indent);
                $decls[] = $id . ' = ' . $init;
            } else {
                $decls[] = $id . ' = null';
            }
        }
        return $indent . implode(";\n" . $indent, $decls) . ';';
    }

    private function walkIfStatement(array $node, string $indent): string
    {
        $test = $this->walkExpression($node['test'], $indent);
        $consequent = $node['consequent'];
        $alt = $node['alternate'] ?? null;

        // Consequent body
        if ($consequent['type'] === 'BlockStatement') {
            $consBody = $this->walkBlockBody($consequent['body'] ?? [], $indent);
            $result = $indent . 'if (' . $test . ') {' . ($consBody ? "\n" . $consBody . "\n" . $indent . '}' : '}');
        } else {
            $result = $indent . 'if (' . $test . ")\n";
            $result .= $this->walkStatement($consequent, $indent . '    ');
        }

        // Alternate
        if ($alt) {
            if ($alt['type'] === 'BlockStatement') {
                $altBody = $this->walkBlockBody($alt['body'] ?? [], $indent);
                $result .= ' else {' . ($altBody ? "\n" . $altBody . "\n" . $indent . '}' : '}');
            } elseif ($alt['type'] === 'IfStatement') {
                $result .= ' else ' . ltrim($this->walkIfStatement($alt, $indent));
            } else {
                $result .= ' else' . "\n";
                $result .= $this->walkStatement($alt, $indent . '    ');
            }
        }

        return $result;
    }

    private function walkForStatement(array $node, string $indent): string
    {
        $init = '';
        if (isset($node['init']) && $node['init']) {
            if ($node['init']['type'] === 'VariableDeclaration') {
                $init = rtrim($this->walkVariableDeclaration($node['init'], ''), ';');
            } else {
                $init = $this->walkExpression($node['init'], $indent);
            }
        }
        $test = (isset($node['test']) && $node['test']) ? $this->walkExpression($node['test'], $indent) : '';
        $update = (isset($node['update']) && $node['update']) ? $this->walkExpression($node['update'], $indent) : '';

        $body = $node['body']['type'] === 'BlockStatement'
            ? $this->walkBlockBody($node['body']['body'] ?? [], $indent)
            : $indent . '    ' . $this->walkStatement($node['body'], $indent . '    ');

        $forHead = 'for (' . $init . '; ' . $test . '; ' . $update . ') {';

        return $indent . $forHead . ($body ? "\n" . $body . "\n" . $indent . '}' : '}');
    }

    private function walkForEachStatement(array $node, string $indent): string
    {
        $isForIn = $node['type'] === 'ForInStatement';
        $left = $node['left'];
        $right = $this->walkExpression($node['right'], $indent);

        // Extract the variable name from the left side
        if ($left['type'] === 'VariableDeclaration') {
            $varDecl = $left['declarations'][0] ?? [];
            $varName = $this->walkExpression($varDecl['id'], $indent);
        } else {
            $varName = $this->walkExpression($left, $indent);
        }

        $body = $node['body']['type'] === 'BlockStatement'
            ? $this->walkBlockBody($node['body']['body'] ?? [], $indent)
            : $indent . '    ' . $this->walkStatement($node['body'], $indent . '    ');

        if ($isForIn) {
            // for (key in obj) -> foreach (obj as key => value)
            // But JS for-in iterates keys, not values
            $head = 'foreach (' . $right . ' as ' . $varName . ' => $__value__) {';
        } else {
            // for (value of iterable) -> foreach (iterable as value)
            $head = 'foreach (' . $right . ' as ' . $varName . ') {';
        }

        return $indent . $head . ($body ? "\n" . $body . "\n" . $indent . '}' : '}');
    }

    private function walkSwitchStatement(array $node, string $indent): string
    {
        $discriminant = $this->walkExpression($node['discriminant'], $indent);
        $result = $indent . 'switch (' . $discriminant . ') {';

        foreach ($node['cases'] ?? [] as $case) {
            if ($case['test'] === null) {
                $result .= "\n" . $indent . '    default:';
            } else {
                $test = $this->walkExpression($case['test'], $indent);
                $result .= "\n" . $indent . '    case ' . $test . ':';
            }
            foreach ($case['consequent'] ?? [] as $stmt) {
                $converted = $this->walkStatement($stmt, $indent . '        ');
                $result .= "\n" . $converted;
            }
        }

        $result .= "\n" . $indent . '}';
        return $result;
    }

    private function walkTryStatement(array $node, string $indent): string
    {
        $body = $this->walkBlockBody($node['block']['body'] ?? [], $indent);
        $result = $indent . "try {\n" . $body . "\n" . $indent . '}';

        // Handler (catch)
        if (isset($node['handler'])) {
            $param = $this->walkExpression($node['handler']['param'] ?? [], $indent);
            $handlerBody = $this->walkBlockBody($node['handler']['body']['body'] ?? [], $indent);
            $result .= ' catch (' . $param . ') {' . ($handlerBody ? "\n" . $handlerBody . "\n" . $indent . '}' : '}');
        }

        // Finalizer (finally)
        if (isset($node['finalizer'])) {
            $finalBody = $this->walkBlockBody($node['finalizer']['body'] ?? [], $indent);
            $result .= ' finally {' . ($finalBody ? "\n" . $finalBody . "\n" . $indent . '}' : '}');
        }

        return $result;
    }

    private function walkBlockBody(array $body, string $indent): string
    {
        return $this->walkStatements($body, $indent . '    ');
    }

    // ── Expression walker ──

    private function walkExpression(?array $node, string $indent): string
    {
        if (!$node) return 'null';

        switch ($node['type']) {
            case 'Identifier':
                return $this->walkIdentifier($node);

            case 'Literal':
                return $this->walkLiteral($node);

            case 'ThisExpression':
                return '$this';

            case 'ArrayExpression':
                return '[' . $this->walkExpressionList($node['elements'] ?? [], $indent) . ']';

            case 'ObjectExpression':
                return $this->walkObjectExpression($node, $indent);

            case 'FunctionExpression':
                return $this->walkFunctionExpression($node);

            case 'ArrowFunctionExpression':
                return $this->walkArrowFunction($node, $indent);

            case 'UnaryExpression':
                return $this->walkUnaryExpression($node, $indent);

            case 'BinaryExpression':
                return $this->walkBinaryExpression($node, $indent);

            case 'LogicalExpression':
                return $this->walkBinaryExpression($node, $indent);

            case 'ConditionalExpression':
                $test = $this->walkExpression($node['test'], $indent);
                $cons = $this->walkExpression($node['consequent'], $indent);
                $alt = $this->walkExpression($node['alternate'], $indent);
                return '(' . $test . ' ? ' . $cons . ' : ' . $alt . ')';

            case 'CallExpression':
                return $this->walkCallExpression($node, $indent);

            case 'NewExpression':
                $callee = $this->walkExpression($node['callee'], $indent);
                $args = $this->walkExpressionList($node['arguments'] ?? [], $indent);
                return 'new ' . $callee . '(' . $args . ')';

            case 'MemberExpression':
                return $this->walkMemberExpression($node, $indent);

            case 'AssignmentExpression':
                return $this->walkAssignmentExpression($node, $indent);

            case 'UpdateExpression':
                return $this->walkUpdateExpression($node);

            case 'SequenceExpression':
                return '(' . $this->walkExpressionList($node['expressions'] ?? [], $indent) . ')';

            case 'SpreadElement':
                return '...' . $this->walkExpression($node['argument'], $indent);

            case 'TemplateLiteral':
                return $this->walkTemplateLiteral($node, $indent);

            case 'YieldExpression':
                $arg = isset($node['argument']) ? $this->walkExpression($node['argument'], $indent) : '';
                return ($node['delegate'] ? 'yield from ' : 'yield ') . $arg;

            case 'AwaitExpression':
                $arg = $this->walkExpression($node['argument'], $indent);
                return $arg; // drop await in PHP

            case 'ChainExpression':
            case 'OptionalCallExpression':
            case 'OptionalMemberExpression':
                // Handle optional chaining - just use regular expression
                $inner = $this->walkExpression($node['expression'] ?? $node['callee'] ?? $node['object'] ?? null, $indent);
                return $inner ?: 'null';

            case 'AssignmentPattern':
                $left = $this->walkExpression($node['left'] ?? $node['id'] ?? [], $indent);
                $right = $this->walkExpression($node['right'], $indent);
                return $left . ' = ' . $right;

            case 'RestElement':
                return '...' . $this->walkExpression($node['argument'], $indent);

            case 'ObjectPattern':
                return $this->walkExpression($node['id'] ?? $node, $indent);

            case 'ArrayPattern':
                $elements = [];
                foreach ($node['elements'] ?? [] as $el) {
                    $elements[] = $el ? $this->walkExpression($el, $indent) : 'null';
                }
                return '[' . implode(', ', $elements) . ']';

            case 'Property':
                $key = $this->walkPropertyKey($node);
                $value = $this->walkExpression($node['value'], $indent);
                if ($node['method'] ?? false) {
                    $params = $this->walkParams($node['value']['params'] ?? []);
                    $body = $this->walkBlockBody($node['value']['body']['body'] ?? [], $indent);
                    return $key . ' => function(' . $params . ') {' . ($body ? "\n" . $body . "\n" . $indent : '') . '}';
                }
                return $key . ' => ' . $value;

            case 'MetaProperty':
                return $node['meta']['name'] . '::' . $node['property']['name'];

            default:
                return 'null /* ' . $node['type'] . ' */';
        }
    }

    private function walkIdentifier(array $node): string
    {
        $name = $node['name'] ?? '';

        // JS globals that stay without $
        static $globals = [
            'undefined' => 'null',
            'NaN' => 'NAN',
            'Infinity' => 'INF',
        ];
        if (isset($globals[$name])) return $globals[$name];

        // Local vars take precedence over globals — if re-declared, use $
        if (isset($this->localVars[$name])) return '$' . $name;

        static $noPrefix = [
            'Math', 'JSON', 'Object', 'Array', 'Error', 'TypeError', 'RangeError',
            'console', 'process', 'Buffer', 'setTimeout', 'setInterval',
            'clearTimeout', 'require', 'module', 'exports', '__dirname',
            '__filename', 'global', 'Number', 'Boolean', 'String', 'Date',
            'RegExp', 'Map', 'Set', 'WeakMap', 'WeakSet', 'Promise',
            'Symbol', 'Reflect', 'Proxy', 'isFinite', 'isNaN',
            'parseInt', 'parseFloat', 'encodeURI', 'encodeURIComponent',
            'decodeURI', 'decodeURIComponent',
        ];

        if (in_array($name, $noPrefix, true)) return $name;

        // Assume unknown identifiers are functions/constants (no $)
        // But check if it looks like a constant (all caps)
        if (strtoupper($name) === $name && strlen($name) > 1) return $name;

        return '$' . $name;
    }

    private function walkLiteral(array $node): string
    {
        $val = $node['value'] ?? null;
        $raw = $node['raw'] ?? '';

        if ($val === null) return 'null';
        if (is_bool($val)) return $val ? 'true' : 'false';
        if (is_string($val)) return $raw ?: var_export($val, true);
        if (is_int($val) || is_float($val)) return (string)$val;

        // RegExp - store as PHP string (use preg_match() where needed)
        if (isset($node['regex'])) {
            $pattern = $node['regex']['pattern'];
            $flags = $node['regex']['flags'];
            $phpPattern = preg_replace('#/#', '\\/#', $pattern);
            return var_export('/' . $phpPattern . '/' . $flags, true);
        }

        if ($raw === 'undefined') return 'null';
        if ($raw === 'Infinity') return 'INF';

        return (string)$val;
    }

    private function walkObjectExpression(array $node, string $indent): string
    {
        $props = $node['properties'] ?? [];
        if (empty($props)) return '[]';

        $items = [];
        foreach ($props as $prop) {
            if ($prop['type'] === 'SpreadElement') {
                $items[] = '...' . $this->walkExpression($prop['argument'], $indent);
            } elseif ($prop['type'] === 'Property') {
                $key = $this->walkPropertyKey($prop);
                $value = $this->walkExpression($prop['value'], $indent);
                if ($prop['method'] ?? false) {
                    $params = $this->walkParams($prop['value']['params'] ?? []);
                    $body = $this->walkBlockBody($prop['value']['body']['body'] ?? [], $indent . '    ');
                    $value = "function(" . $params . ") {\n" . $body . "\n" . $indent . '}';
                } elseif ($prop['shorthand'] ?? false) {
                    // shorthand: { x } -> 'x' => $x
                }
                $items[] = $key . ' => ' . $value;
            } else {
                $items[] = $this->walkExpression($prop, $indent);
            }
        }

        $inner = implode(",\n" . $indent . '    ', $items);
        return "[\n" . $indent . '    ' . $inner . "\n" . $indent . ']';
    }

    private function walkPropertyKey(array $node): string
    {
        $key = $node['key'] ?? $node;
        if ($key['type'] === 'Identifier') {
            $name = $key['name'];
            // If the name is a valid PHP identifier without special chars
            if (preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $name)) {
                // Use quoted string key for safety with numeric/weird keys
                if (is_numeric($name[0]) || $name === 'null' || $name === 'true' || $name === 'false') {
                    return var_export($name, true);
                }
                return var_export($name, true);
            }
            return var_export($name, true);
        }
        if ($key['type'] === 'Literal') {
            return var_export($key['value'] ?? '', true);
        }
        // Computed property key
        return $this->walkExpression($key, '');
    }

    private function walkFunctionExpression(array $node): string
    {
        $params = $this->walkParams($node['params'] ?? []);
        $isGenerator = $node['generator'] ?? false;
        $isAsync = $node['async'] ?? false;

        // For generators and async functions, we need special handling
        $generator = $isGenerator ? ' // GeneratorFunction' : '';
        $async = $isAsync ? ' // async' : '';

        // Walk body as expression if arrow function
        $body = $this->walkBlockBody($node['body']['body'] ?? [], '    ');

        return 'function(' . $params . ')' . $generator . $async . ($body ? " {\n" . $body . "\n}" : ' {}');
    }

    private function walkArrowFunction(array $node, string $indent): string
    {
        $params = $this->walkParams($node['params'] ?? []);

        if (isset($node['body']['type']) && $node['body']['type'] !== 'BlockStatement') {
            // Expression body: (x) => x + 1  ->  function($x) { return $x + 1; }
            $body = $this->walkExpression($node['body'], $indent);
            return 'function(' . $params . ') { return ' . $body . '; }';
        } else {
            // Block body: (x) => { ... }  ->  function($x) { ... }
            $body = $this->walkBlockBody($node['body']['body'] ?? [], $indent);
            return 'function(' . $params . ')' . ($body ? " {\n" . $body . "\n" . $indent . '}' : ' {}');
        }
    }

    private function walkUnaryExpression(array $node, string $indent): string
    {
        $op = $node['operator'];
        $arg = $this->walkExpression($node['argument'], $indent);

        switch ($op) {
            case '!':
                return '!' . $arg;
            case '~':
                return '~' . $arg;
            case '+':
                return '+' . $arg;
            case '-':
                return '-' . $arg;
            case 'void':
                // JS void always returns undefined; evaluate for side effects, then return null
                return '(static function() { ' . $arg . '; return null; })()';
            case 'typeof':
                return $this->walkTypeof($node, $indent);
            case 'delete':
                return 'unset(' . $arg . ')';
            default:
                return $op . $arg;
        }
    }

    private function walkTypeof(array $node, string $indent): string
    {
        $arg = $node['argument'];
        $expr = $this->walkExpression($arg, $indent);

        // Just return the expression - typeof will be resolved at the call site
        // if it's part of a comparison pattern
        return $expr;
    }

    private function walkBinaryExpression(array $node, string $indent): string
    {
        $op = $node['operator'];
        $left = $this->walkExpression($node['left'], $indent);
        $right = $this->walkExpression($node['right'], $indent);

        // Handle typeof x === 'y' patterns
        if ($op === '===' || $op === '!==' || $op == '==' || $op == '!=') {
            // Check if left/right is typeof
            if (isset($node['left']['type']) && $node['left']['type'] === 'UnaryExpression' && $node['left']['operator'] === 'typeof') {
                return $this->walkTypeofComparison($node['left'], $node['right'], $op);
            }
            if (isset($node['right']['type']) && $node['right']['type'] === 'UnaryExpression' && $node['right']['operator'] === 'typeof') {
                return $this->walkTypeofComparison($node['right'], $node['left'], $op);
            }
        }

        // PHP operators are mostly the same
        $phpOp = $op;
        if ($op === '===') $phpOp = '===';
        if ($op === '!==') $phpOp = '!==';
        if ($op === '**') $phpOp = '**';
        if ($op === '<<') $phpOp = '<<';
        if ($op === '>>') $phpOp = '>>';
        if ($op === '>>>') $phpOp = '>>'; // unsigned right shift not in PHP
        if ($op === 'in') $phpOp = 'in_array'; // needs special handling
        if ($op === 'instanceof') $phpOp = 'instanceof';

        // Handle `in` operator: `x in y` -> `in_array(x, y)` or `array_key_exists(x, y)`
        if ($op === 'in') {
            return '(is_array(' . $right . ') ? (array_key_exists(' . $left . ', ' . $right . ") || in_array(" . $left . ", " . $right . ")) : false)";
        }

        return $left . ' ' . $phpOp . ' ' . $right;
    }

    private function walkTypeofComparison(array $typeofNode, array $typeNode, string $op): string
    {
        $arg = $this->walkExpression($typeofNode['argument'], '');
        $typeStr = $typeNode['value'] ?? '';

        $positive = ($op === '===' || $op === '==');
        $prefix = $positive ? '' : '!';

        switch ($typeStr) {
            case 'undefined':
                // typeof x === 'undefined' -> !isset($x)
                // typeof x !== 'undefined' -> isset($x)
                return $positive ? '!isset(' . $arg . ')' : 'isset(' . $arg . ')';
            case 'number':
                return $prefix . 'is_numeric(' . $arg . ')';
            case 'string':
                return $prefix . 'is_string(' . $arg . ')';
            case 'boolean':
                return $prefix . 'is_bool(' . $arg . ')';
            case 'function':
                return $prefix . 'is_callable(' . $arg . ')';
            case 'object':
                return $prefix . '(is_object(' . $arg . ') || is_array(' . $arg . '))';
            case 'symbol':
                return $positive ? 'false' : 'true';
            case 'bigint':
                return $prefix . 'is_int(' . $arg . ')';
            default:
                return $prefix . 'true /* typeof ' . $typeStr . ' */';
        }
    }

    private function walkCallExpression(array $node, string $indent): string
    {
        $callee = $node['callee'];
        $args = $this->walkExpressionList($node['arguments'] ?? [], $indent);

        // Handle require()
        if ($callee['type'] === 'Identifier' && $callee['name'] === 'require') {
            $firstArg = $node['arguments'][0] ?? null;
            if ($firstArg && $firstArg['type'] === 'Literal') {
                $path = $firstArg['value'];
                $path = preg_replace('/\.js$/', '.php', $path);
                if (strpos($path, '.') === 0 || strpos($path, '/') === 0) {
                    return 'require __DIR__ . ' . var_export('/' . ltrim($path, './'), true);
                }
                return 'require ' . var_export($path, true);
            }
            // Dynamic require
            return 'require ' . $this->walkExpression($firstArg ?? [], $indent);
        }

        // Handle method calls on objects that map to PHP functions
        if ($callee['type'] === 'MemberExpression' && !$callee['computed']) {
            $prop = $callee['property']['name'] ?? '';

            // Object method -> PHP function mappings
            $methodMap = [
                'trim' => 'trim',
                'toString' => false, // cast
                'toUpperCase' => 'strtoupper',
                'toLowerCase' => 'strtolower',
                'split' => 'explode',
                'replace' => 'str_replace',
                'slice' => 'array_slice',
                'concat' => 'array_merge',
                'join' => 'implode',
                'indexOf' => 'array_search',
                'includes' => 'in_array',
                'push' => false, // $arr[] = val
                'pop' => 'array_pop',
                'shift' => 'array_shift',
                'unshift' => 'array_unshift',
                'test' => 'preg_match',
                'exec' => false,
            ];

            if (isset($methodMap[$prop])) {
                $obj = $this->walkExpression($callee['object'], $indent);
                if ($methodMap[$prop] === false) {
                    if ($prop === 'toString') {
                        return '(string)(' . $obj . ')';
                    }
                    if ($prop === 'push') {
                        // $arr[] = val
                        $val = $this->walkExpression($node['arguments'][0] ?? [], $indent);
                        return $obj . '[] = ' . $val;
                    }
                    if ($prop === 'unshift') {
                        $val = $this->walkExpression($node['arguments'][0] ?? [], $indent);
                        return 'array_unshift(' . $obj . ', ' . $val . ')';
                    }
                    if ($prop === 'exec') {
                        return 'preg_match(' . $obj . ', ' . $args . ')';
                    }
                } else {
                    // Reorder args: obj.method(arg) -> method(obj, arg)
                    if (in_array($prop, ['trim', 'toString', 'toUpperCase', 'toLowerCase'])) {
                        return $methodMap[$prop] . '(' . ($args ? $obj . ', ' . $args : $obj) . ')';
                    }
                    if (in_array($prop, ['indexOf', 'includes', 'push', 'pop', 'shift', 'unshift', 'test', 'exec'])) {
                        return $methodMap[$prop] . '(' . $args . ', ' . $obj . ')';
                    }
                    // For explode, array_slice, etc: method(arg, obj)
                    return $methodMap[$prop] . '(' . $args . ($args ? ', ' : '') . $obj . ')';
                }
            }

            // Handle .length
            if ($prop === 'length' && $callee['object']['type'] === 'MemberExpression') {
                // This is actually getting .length on something. Skip - not a function call.
            }
        }

        // Handle Math.* calls
        if ($callee['type'] === 'MemberExpression' && !$callee['computed']) {
            $obj = $callee['object'];
            $prop = $callee['property']['name'] ?? '';

            if ($obj['type'] === 'Identifier' && $obj['name'] === 'Math') {
                static $mathMap = [
                    'floor' => 'floor', 'ceil' => 'ceil', 'round' => 'round',
                    'abs' => 'abs', 'max' => 'max', 'min' => 'min',
                    'pow' => 'pow', 'sqrt' => 'sqrt', 'log' => 'log',
                    'log2' => 'log', 'log10' => 'log10', 'exp' => 'exp',
                    'sin' => 'sin', 'cos' => 'cos', 'tan' => 'tan',
                    'asin' => 'asin', 'acos' => 'acos', 'atan' => 'atan',
                    'atan2' => 'atan2', 'random' => 'mt_rand',
                    'sign' => 'fn($v) => $v > 0 ? 1 : ($v < 0 ? -1 : 0)',
                ];
                if (isset($mathMap[$prop])) {
                    $fn = $mathMap[$prop];
                    if ($prop === 'random') {
                        return 'mt_rand() / mt_getrandmax()';
                    }
                    return $fn . '(' . $args . ')';
                }
                if ($prop === 'PI') return 'M_PI';
                if ($prop === 'E') return 'M_E';
            }

            // Handle Array.isArray, Object.keys, etc.
            if ($obj['type'] === 'Identifier') {
                if ($obj['name'] === 'Array' && $prop === 'isArray') {
                    return 'is_array(' . $args . ')';
                }
                if ($obj['name'] === 'Object') {
                    if ($prop === 'keys') return 'array_keys(' . $args . ')';
                    if ($prop === 'values') return 'array_values(' . $args . ')';
                    if ($prop === 'assign') return 'array_merge(' . $args . ')';
                    if ($prop === 'entries') return 'array_map(null, array_keys(' . $args . '), array_values(' . $args . '))';
                }
                if ($obj['name'] === 'JSON') {
                    if ($prop === 'parse') return 'json_decode(' . $args . ', true)';
                    if ($prop === 'stringify') return 'json_encode(' . $args . ', JSON_UNESCAPED_UNICODE)';
                }
                if ($obj['name'] === 'Number') {
                    if ($prop === 'isFinite') return 'is_finite(' . $args . ')';
                    if ($prop === 'isNaN') return 'is_nan(' . $args . ')';
                    if ($prop === 'isInteger') return 'is_int(' . $args . ')';
                    if ($prop === 'parseInt') return '(int)(' . $args . ')';
                    if ($prop === 'parseFloat') return '(float)(' . $args . ')';
                }
                if ($obj['name'] === 'console') {
                    if ($prop === 'log') return 'echo ' . $args;
                    if ($prop === 'error' || $prop === 'warn') return 'fwrite(STDERR, ' . $args . ')';
                }
                if ($obj['name'] === 'process') {
                    if ($prop === 'exit') return 'exit(' . $args . ')';
                    if ($prop === 'argv') return '$GLOBALS["argv"] ?? $argv';
                    if ($prop === 'cwd') return 'getcwd()';
                }
            }
        }

        // Handle module.exports = ...
        if ($callee['type'] === 'MemberExpression' &&
            $callee['object']['type'] === 'Identifier' &&
            $callee['object']['name'] === 'module' &&
            $callee['property']['name'] === 'exports' &&
            $callee['object']['type'] !== 'ThisExpression') {
            // This is actually an assignment expression: module.exports = X
            // Walked as call expression? No, it'd be an assignment... but some cases
            // may have module.exports() which doesn't make sense.
            // Fall through to normal member expression.
        }

        // Handle new Array(n) / Array(n)
        if ($callee['type'] === 'Identifier' && $callee['name'] === 'Array') {
            if (count($node['arguments']) === 1) {
                return 'array_fill(0, ' . $args . ', null)';
            }
            return '[' . $args . ']';
        }

        // Normal function call
        $calleeStr = $this->walkExpression($callee, $indent);
        return $calleeStr . '(' . $args . ')';
    }

    private function walkMemberExpression(array $node, string $indent): string
    {
        $objectNode = $node['object'];
        $computed = $node['computed'] ?? false;
        $propName = $node['property']['name'] ?? '';

        // Handle Math.*, Number.*, Object.*, Array.*, JSON.*, console.*
        if (!$computed && $objectNode['type'] === 'Identifier') {
            $objName = $objectNode['name'];
            static $staticObjMap = [
                'Math' => [
                    'PI' => 'M_PI', 'E' => 'M_E', 'LN2' => 'M_LN2',
                    'LN10' => 'M_LN10', 'LOG2E' => 'M_LOG2E', 'LOG10E' => 'M_LOG10E',
                    'SQRT1_2' => 'M_SQRT1_2', 'SQRT2' => 'M_SQRT2',
                    'floor' => 'floor', 'ceil' => 'ceil', 'round' => 'round',
                    'abs' => 'abs', 'max' => 'max', 'min' => 'min',
                    'pow' => 'pow', 'sqrt' => 'sqrt', 'log' => 'log',
                    'exp' => 'exp', 'sin' => 'sin', 'cos' => 'cos',
                    'tan' => 'tan', 'asin' => 'asin', 'acos' => 'acos',
                    'atan' => 'atan', 'atan2' => 'atan2', 'random' => 'random',
                    'sign' => 'sign',
                ],
                'Number' => [
                    'MAX_VALUE' => 'PHP_FLOAT_MAX', 'MIN_VALUE' => 'PHP_FLOAT_MIN',
                    'NaN' => 'NAN', 'NEGATIVE_INFINITY' => '-INF',
                    'POSITIVE_INFINITY' => 'INF', 'EPSILON' => 'PHP_FLOAT_EPSILON',
                    'MAX_SAFE_INTEGER' => 'PHP_INT_MAX',
                    'MIN_SAFE_INTEGER' => 'PHP_INT_MIN',
                ],
                'Object' => ['keys' => 'keys', 'values' => 'values', 'assign' => 'assign'],
                'JSON' => ['parse' => 'parse', 'stringify' => 'stringify'],
            ];
            if (isset($staticObjMap[$objName][$propName])) {
                $mapped = $staticObjMap[$objName][$propName];
                // If it's a constant (starts with M_ or PHP_ or is INF/NAN), return it directly
                if (strpos($mapped, 'M_') === 0 || strpos($mapped, 'PHP_') === 0 || $mapped === 'INF' || $mapped === 'NAN' || $mapped === '-INF') {
                    return $mapped;
                }
                // Otherwise, it's a function name reference
                return $mapped;
            }
        }

        $object = $this->walkExpression($node['object'], $indent);

        // Handle .length -> array count / strlen
        if (!$computed && $propName === 'length') {
            return '(is_array(' . $object . ') ? count(' . $object . ') : strlen(' . $object . '))';
        }

        if ($computed) {
            $property = $this->walkExpression($node['property'], $indent);
            return $object . '[' . $property . ']';
        }

        // If object is $this (this), use ->property
        if ($object === '$this') {
            return '$this->' . $propName;
        }
        return $object . '[' . var_export($propName, true) . ']';
    }

    private function walkAssignmentExpression(array $node, string $indent): string
    {
        $op = $node['operator'];
        $left = $this->walkExpression($node['left'], $indent);
        $right = $this->walkExpression($node['right'], $indent);

        // Handle module.exports = X -> return X
        if ($node['left']['type'] === 'MemberExpression' &&
            isset($node['left']['object']['name']) &&
            $node['left']['object']['name'] === 'module' &&
            isset($node['left']['property']['name']) &&
            $node['left']['property']['name'] === 'exports') {
            return $right;
        }

        // Handle exports.X = Y -> $X = Y (top-level variable)
        if ($node['left']['type'] === 'MemberExpression' &&
            isset($node['left']['object']['name']) &&
            $node['left']['object']['name'] === 'exports') {
            $prop = $node['left']['property']['name'] ?? '';
            return '$' . $prop . ' = ' . $right;
        }

        // Convert compound operators
        $phpOp = $op;
        if ($op === '**=') $phpOp = '**=';
        if ($op === '||=') $phpOp = '||=';
        if ($op === '&&=') $phpOp = '&&=';
        if ($op === '??=') $phpOp = '??=';
        if ($op === '>>>=') $phpOp = '>>=';

        return $left . ' ' . $phpOp . ' ' . $right;
    }

    private function walkUpdateExpression(array $node): string
    {
        $op = $node['operator'];
        $arg = $this->walkExpression($node['argument'], '');
        $prefix = $node['prefix'] ?? false;

        // PHP supports ++$x, $x++, --$x, $x--
        if ($op === '++') return $prefix ? '++' . $arg : $arg . '++';
        if ($op === '--') return $prefix ? '--' . $arg : $arg . '--';

        return $arg . $op;
    }

    private function walkTemplateLiteral(array $node, string $indent): string
    {
        $parts = [];
        foreach ($node['expressions'] ?? [] as $i => $expr) {
            $quasis = $node['quasis'][$i] ?? [];
            $tail = $node['quasis'][$i + 1] ?? [];

            $cooked = $quasis['value']['cooked'] ?? '';
            $parts[] = var_export($cooked, true);
            $parts[] = '" . ' . $this->walkExpression($expr, $indent) . ' . "';
        }

        // Last quasi
        $last = $node['quasis'][count($node['quasis']) - 1] ?? [];
        $cooked = $last['value']['cooked'] ?? '';
        $parts[] = var_export($cooked, true);

        // Simplify: join parts
        $result = implode('', $parts);
        return '"' . substr($result, 1, -1) . '"'; // remove outer quotes
    }

    // ── Helpers ──

    private function walkParams(array $params): string
    {
        $result = [];
        foreach ($params as $p) {
            $result[] = $this->walkExpression($p, '');
        }
        return implode(', ', $result);
    }

    private function walkExpressionList(?array $exprs, string $indent): string
    {
        if (!$exprs) return '';
        $result = [];
        foreach ($exprs as $expr) {
            $result[] = $this->walkExpression($expr, $indent);
        }
        return implode(', ', $result);
    }

    private function isModuleExportsAssignment(array $node): bool
    {
        return $node['type'] === 'AssignmentExpression' &&
            $node['left']['type'] === 'MemberExpression' &&
            isset($node['left']['object']['name']) &&
            $node['left']['object']['name'] === 'module' &&
            isset($node['left']['property']['name']) &&
            $node['left']['property']['name'] === 'exports';
    }

    private function walkModuleExports(array $node, string $indent): string
    {
        $right = $node['right'];
        // If RHS is a function name, return it as string
        if ($right['type'] === 'Identifier') {
            $name = $right['name'];
            // Check if function name was renamed to avoid PHP conflicts
            $reserved = ['Hash', 'Map', 'Set', 'WeakMap', 'WeakSet', 'Promise',
                'Closure', 'DateTime', 'Exception', 'PDO', 'DOMDocument',
                'SimpleXMLElement', 'SplStack', 'SplFileInfo', 'Iterator',
                'Countable', 'ArrayAccess', 'Serializable', 'JsonSerializable',
                'RecursiveIteratorIterator', 'DirectoryIterator', 'PharData'];
            if (in_array($name, $reserved, true)) {
                $name = '_' . $name;
            }
            return $indent . 'return ' . var_export($name, true) . ';';
        }
        $val = $this->walkExpression($right, $indent);
        return $indent . 'return ' . $val . ';';
    }
}
