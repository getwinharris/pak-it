<?php
$toNumber = require __DIR__ . '/toNumber.php';
$INFINITY = 1 / 0;
$MAX_INTEGER = 1.7976931348623E+308;
function toFinite($value) {
    if (!$value) {
        return ($value === 0 ? $value : 0);
    }
    $value = $toNumber($value);
    if ($value === $INFINITY || $value === -$INFINITY) {
        $sign = ($value < 0 ? -1 : 1);
        return $sign * $MAX_INTEGER;
    }
    return ($value === $value ? $value : 0);
}
return 'toFinite';
