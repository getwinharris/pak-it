<?php
$toInteger = require __DIR__ . '/toInteger.php';
$FUNC_ERROR_TEXT = 'Expected a function';
function before($n, $func) {
    $result = null;
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $n = $toInteger($n);
    return function() {
        if (--$n > 0) {
            $result = $func['apply']($this, $arguments);
        }
        if ($n <= 1) {
            $func = null;
        }
        return $result;
};
}
return 'before';
