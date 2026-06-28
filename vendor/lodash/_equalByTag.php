<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$Uint8Array = require __DIR__ . '/_Uint8Array.php';
$eq = require __DIR__ . '/eq.php';
$equalArrays = require __DIR__ . '/_equalArrays.php';
$mapToArray = require __DIR__ . '/_mapToArray.php';
$setToArray = require __DIR__ . '/_setToArray.php';
$COMPARE_PARTIAL_FLAG = 1;
$COMPARE_UNORDERED_FLAG = 2;
$boolTag = '[object Boolean]';
$dateTag = '[object Date]';
$errorTag = '[object Error]';
$mapTag = '[object Map]';
$numberTag = '[object Number]';
$regexpTag = '[object RegExp]';
$setTag = '[object Set]';
$stringTag = '[object String]';
$symbolTag = '[object Symbol]';
$arrayBufferTag = '[object ArrayBuffer]';
$dataViewTag = '[object DataView]';
$symbolProto = ($Symbol ? $Symbol['prototype'] : null);
$symbolValueOf = ($symbolProto ? $symbolProto['valueOf'] : null);
function equalByTag($object, $other, $tag, $bitmask, $customizer, $equalFunc, $stack) {
    switch ($tag) {
        case $dataViewTag:
            if ($object['byteLength'] != $other['byteLength'] || $object['byteOffset'] != $other['byteOffset']) {
                return false;
            }
            $object = $object['buffer'];
            $other = $other['buffer'];
        case $arrayBufferTag:
            if ($object['byteLength'] != $other['byteLength'] || !$equalFunc(new $Uint8Array($object), new $Uint8Array($other))) {
                return false;
            }
            return true;
        case $boolTag:
        case $dateTag:
        case $numberTag:
            return $eq(+$object, +$other);
        case $errorTag:
            return $object['name'] == $other['name'] && $object['message'] == $other['message'];
        case $regexpTag:
        case $stringTag:
            return $object == $other + '';
        case $mapTag:
            $convert = $mapToArray;
        case $setTag:
            $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
            $convert || $convert = $setToArray;
            if ($object['size'] != $other['size'] && !$isPartial) {
                return false;
            }
            $stacked = $stack['get']($object);
            if ($stacked) {
                return $stacked == $other;
            }
            $bitmask |= $COMPARE_UNORDERED_FLAG;
            $stack['set']($object, $other);
            $result = $equalArrays($convert($object), $convert($other), $bitmask, $customizer, $equalFunc, $stack);
            $stack['delete']($object);
            return $result;
        case $symbolTag:
            if ($symbolValueOf) {
                return call_user_func($symbolValueOf, $object) == call_user_func($symbolValueOf, $other);
            }
    }
    return false;
}
return 'equalByTag';
