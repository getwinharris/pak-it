<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$toInteger = require __DIR__ . '/toInteger.php';
$MAX_SAFE_INTEGER = 9007199254740991;
function toSafeInteger($value) {
    return ($value ? $baseClamp($toInteger($value), -$MAX_SAFE_INTEGER, $MAX_SAFE_INTEGER) : ($value === 0 ? $value : 0));
}
return 'toSafeInteger';
