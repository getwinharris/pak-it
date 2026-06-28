<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$isArray = require __DIR__ . '/isArray.php';
$isSymbol = require __DIR__ . '/isSymbol.php';
$INFINITY = 1 / 0;
$symbolProto = ($Symbol ? $Symbol['prototype'] : null);
$symbolToString = ($symbolProto ? $symbolProto['toString'] : null);
function baseToString($value) {
    if (is_string($value)) {
        return $value;
    }
    if ($isArray($value)) {
        return $arrayMap($value, $baseToString) + '';
    }
    if ($isSymbol($value)) {
        return ($symbolToString ? call_user_func($symbolToString, $value) : '');
    }
    $result = $value + '';
    return ($result == '0' && 1 / $value == -$INFINITY ? '-0' : $result);
}
return 'baseToString';
