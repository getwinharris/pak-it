<?php
$baseTimes = require __DIR__ . '/_baseTimes.php';
$isArguments = require __DIR__ . '/isArguments.php';
$isArray = require __DIR__ . '/isArray.php';
$isBuffer = require __DIR__ . '/isBuffer.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$isTypedArray = require __DIR__ . '/isTypedArray.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function arrayLikeKeys($value, $inherited) {
    $isArr = $isArray($value);
    $isArg = !$isArr && $isArguments($value);
    $isBuff = !$isArr && !$isArg && $isBuffer($value);
    $isType = !$isArr && !$isArg && !$isBuff && $isTypedArray($value);
    $skipIndexes = $isArr || $isArg || $isBuff || $isType;
    $result = ($skipIndexes ? $baseTimes((is_array($value) ? count($value) : strlen($value)), String) : []);
    $length = (is_array($result) ? count($result) : strlen($result));
    foreach ($value as $key => $__value__) {
        if ($inherited || call_user_func($hasOwnProperty, $value, $key) && !$skipIndexes && $key == 'length' || $isBuff && $key == 'offset' || $key == 'parent' || $isType && $key == 'buffer' || $key == 'byteLength' || $key == 'byteOffset' || $isIndex($key, $length)) {
            $result[] = $key;
        }
    }
    return $result;
}
return 'arrayLikeKeys';
