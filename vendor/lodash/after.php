<?php
$toInteger = require __DIR__ . '/toInteger.php';
$FUNC_ERROR_TEXT = 'Expected a function';
function after($n, $func) {
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $n = $toInteger($n);
    return function() {
        if (--$n < 1) {
            return $func['apply']($this, $arguments);
        }
};
}
return 'after';
