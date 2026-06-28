<?php
$SetCache = require __DIR__ . '/_SetCache.php';
$arrayIncludes = require __DIR__ . '/_arrayIncludes.php';
$arrayIncludesWith = require __DIR__ . '/_arrayIncludesWith.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$cacheHas = require __DIR__ . '/_cacheHas.php';
$LARGE_ARRAY_SIZE = 200;
function baseDifference($array, $values, $iteratee, $comparator) {
    $index = -1;
    $includes = $arrayIncludes;
    $isCommon = true;
    $length = (is_array($array) ? count($array) : strlen($array));
    $result = [];
    $valuesLength = (is_array($values) ? count($values) : strlen($values));
    if (!$length) {
        return $result;
    }
    if ($iteratee) {
        $values = $arrayMap($values, $baseUnary($iteratee));
    }
    if ($comparator) {
        $includes = $arrayIncludesWith;
        $isCommon = false;
    } else if ((is_array($values) ? count($values) : strlen($values)) >= $LARGE_ARRAY_SIZE) {
        $includes = $cacheHas;
        $isCommon = false;
        $values = new $SetCache($values);
    }
    null /* LabeledStatement */;
    return $result;
}
return 'baseDifference';
