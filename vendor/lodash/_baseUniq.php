<?php
$SetCache = require __DIR__ . '/_SetCache.php';
$arrayIncludes = require __DIR__ . '/_arrayIncludes.php';
$arrayIncludesWith = require __DIR__ . '/_arrayIncludesWith.php';
$cacheHas = require __DIR__ . '/_cacheHas.php';
$createSet = require __DIR__ . '/_createSet.php';
$setToArray = require __DIR__ . '/_setToArray.php';
$LARGE_ARRAY_SIZE = 200;
function baseUniq($array, $iteratee, $comparator) {
    $index = -1;
    $includes = $arrayIncludes;
    $length = (is_array($array) ? count($array) : strlen($array));
    $isCommon = true;
    $result = [];
    $seen = $result;
    if ($comparator) {
        $isCommon = false;
        $includes = $arrayIncludesWith;
    } else if ($length >= $LARGE_ARRAY_SIZE) {
        $set = ($iteratee ? null : $createSet($array));
        if ($set) {
            return $setToArray($set);
        }
        $isCommon = false;
        $includes = $cacheHas;
        $seen = new $SetCache();
    } else {
        $seen = ($iteratee ? [] : $result);
    }
    null /* LabeledStatement */;
    return $result;
}
return 'baseUniq';
