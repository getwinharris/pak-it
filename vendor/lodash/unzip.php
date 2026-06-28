<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseProperty = require __DIR__ . '/_baseProperty.php';
$baseTimes = require __DIR__ . '/_baseTimes.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$nativeMax = max;
function unzip($array) {
    if (!$array && (is_array($array) ? count($array) : strlen($array))) {
        return [];
    }
    $length = 0;
    $array = $arrayFilter($array, function($group) {
        if ($isArrayLikeObject($group)) {
            $length = $nativeMax((is_array($group) ? count($group) : strlen($group)), $length);
            return true;
        }
});
    return $baseTimes($length, function($index) {
        return $arrayMap($array, $baseProperty($index));
});
}
return 'unzip';
