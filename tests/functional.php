<?php

/**
 * Functional integration tests for pak-it's JS→PHP converter.
 *
 * Usage: php tests/functional.php
 */

// ── Convert a JS file via the AST converter ──

function convertJS(string $jsPath): string
{
    require_once __DIR__ . '/../src/AstConverter.php';
    $c = new AstConverter();
    return "<?php\n" . $c->convertCode($jsPath) . "\n";
}

// ── Run a PHP expression, return stdout ──

function runPHP(string $code): string
{
    $tmp = sys_get_temp_dir() . '/pakit-test-' . uniqid() . '.php';
    file_put_contents($tmp, $code);
    exec('php ' . escapeshellarg($tmp) . ' 2>/dev/null', $out, $code);
    unlink($tmp);
    return trim(implode("\n", $out));
}

// ── Run a JS expression, return stdout ──

function runJS(string $code): string
{
    $tmp = sys_get_temp_dir() . '/pakit-test-' . uniqid() . '.js';
    file_put_contents($tmp, $code);
    exec('node ' . escapeshellarg($tmp) . ' 2>/dev/null', $out, $code);
    unlink($tmp);
    return trim(implode("\n", $out));
}

// ── Test runner ──

$passed = 0;
$failed = 0;

function test(string $name, string $js, string $php): void
{
    global $passed, $failed;

    $expected = runJS($js);
    $actual = runPHP($php);

    if ($expected === $actual) {
        echo "  PASS: $name\n";
        $passed++;
    } else {
        echo "  FAIL: $name\n";
        echo "    expected: $expected\n";
        echo "    actual:   $actual\n";
        $failed++;
    }
}

// ══════════════════════════════════════════════════════════════
// Tests
// ══════════════════════════════════════════════════════════════

echo "Running functional conversion tests...\n\n";

// ── Test 1: is-number ──

$jsPath = '/tmp/package/index.js';
if (file_exists($jsPath)) {
    $php = convertJS($jsPath);
    file_put_contents('/tmp/package/index.php', $php);

    $cases = [
        [5, 'true'], [5.5, 'true'], ['abc', 'false'],
        ['5', 'true'], [null, 'false'], ['', 'false'],
        ['5.5', 'true'], [0, 'true'], ['INF', 'true'],
        ['NAN', 'false'], ['  ', 'false'], ['123 ', 'true'],
        [true, 'true'], [false, 'true'], [[], 'false'],
        [new stdClass(), 'false'],
    ];

    $phpCode = '<?php $fn = require "/tmp/package/index.php";' . "\n";
    foreach ($cases as $i => $c) {
        $val = var_export($c[0], true);
        $phpCode .= 'echo "CASE' . $i . ':" . ($fn(' . $val . ') ? "true" : "false") . "\n";' . "\n";
    }
    $actual = runPHP($phpCode);

    $jsCode = 'const fn = require("/tmp/package");' . "\n";
    foreach ($cases as $i => $c) {
        $val = json_encode($c[0]);
        $jsCode .= 'console.log("CASE' . $i . ':" + (fn(' . $val . ') ? "true" : "false"));' . "\n";
    }
    $expected = runJS($jsCode);

    if ($expected === $actual) {
        echo "  PASS: is-number (" . count($cases) . " cases) — JS/PHP output matches\n";
        $passed++;
    } else {
        echo "  FAIL: is-number\n";
        echo "    expected: $expected\n";
        echo "    actual:   $actual\n";
        $failed++;
    }
} else {
    echo "  SKIP: is-number (not at /tmp/package/index.js)\n";
}

echo "\n";
echo str_repeat('─', 50) . "\n";
echo "Results: $passed passed, $failed failed\n";
exit($failed > 0 ? 1 : 0);
