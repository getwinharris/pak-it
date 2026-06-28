<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$toInteger = require __DIR__ . '/toInteger.php';
$FUNC_ERROR_TEXT = 'Expected a function';
function rest($func, $start) {
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $start = ($start === null ? $start : $toInteger($start));
    return $baseRest($func, $start);
}
return 'rest';
