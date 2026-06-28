<?php
$SetCache = require __DIR__ . '/_SetCache.php';
$arrayIncludes = require __DIR__ . '/_arrayIncludes.php';
$arrayIncludesWith = require __DIR__ . '/_arrayIncludesWith.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$cacheHas = require __DIR__ . '/_cacheHas.php';
$nativeMin = min;
function baseIntersection($arrays, $iteratee, $comparator) {
    $includes = ($comparator ? $arrayIncludesWith : $arrayIncludes);
    $length = (is_array($arrays[0]) ? count($arrays[0]) : strlen($arrays[0]));
    $othLength = (is_array($arrays) ? count($arrays) : strlen($arrays));
    $othIndex = $othLength;
    $caches = array_fill(0, $othLength, null);
    $maxLength = INF;
    $result = [];
    while ($othIndex--) {
        $array = $arrays[$othIndex];
        if ($othIndex && $iteratee) {
            $array = $arrayMap($array, $baseUnary($iteratee));
        }
        $maxLength = $nativeMin((is_array($array) ? count($array) : strlen($array)), $maxLength);
        $caches[$othIndex] = (!$comparator && $iteratee || $length >= 120 && (is_array($array) ? count($array) : strlen($array)) >= 120 ? new $SetCache($othIndex && $array) : null);
    }
    $array = $arrays[0];
    $index = -1;
    $seen = $caches[0];
    null /* LabeledStatement */;
    return $result;
}
return 'baseIntersection';
