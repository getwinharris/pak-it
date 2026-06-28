<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$toInteger = require __DIR__ . '/toInteger.php';
$MAX_ARRAY_LENGTH = 4294967295;
function toLength($value) {
    return ($value ? $baseClamp($toInteger($value), 0, $MAX_ARRAY_LENGTH) : 0);
}
return 'toLength';
