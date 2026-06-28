<?php
$isSymbol = require __DIR__ . '/isSymbol.php';
$INFINITY = 1 / 0;
function toKey($value) {
    if (is_string($value) || $isSymbol($value)) {
        return $value;
    }
    $result = $value + '';
    return ($result == '0' && 1 / $value == -$INFINITY ? '-0' : $result);
}
return 'toKey';
