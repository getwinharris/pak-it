<?php
$isInteger = require __DIR__ . '/isInteger.php';
$MAX_SAFE_INTEGER = 9007199254740991;
function isSafeInteger($value) {
    return $isInteger($value) && $value >= -$MAX_SAFE_INTEGER && $value <= $MAX_SAFE_INTEGER;
}
return 'isSafeInteger';
