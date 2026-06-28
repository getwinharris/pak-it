<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIndexOf = require __DIR__ . '/_baseIndexOf.php';
$baseIndexOfWith = require __DIR__ . '/_baseIndexOfWith.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$arrayProto = 'Array'['prototype'];
$splice = $arrayProto['splice'];
function basePullAll($array, $values, $iteratee, $comparator) {
    $indexOf = ($comparator ? $baseIndexOfWith : $baseIndexOf);
    $index = -1;
    $length = (is_array($values) ? count($values) : strlen($values));
    $seen = $array;
    if ($array === $values) {
        $values = $copyArray($values);
    }
    if ($iteratee) {
        $seen = $arrayMap($array, $baseUnary($iteratee));
    }
    while (++$index < $length) {
        $fromIndex = 0;
        $value = $values[$index];
        $computed = ($iteratee ? $iteratee($value) : $value);
        while ($fromIndex = $indexOf($seen, $computed, $fromIndex, $comparator) > -1) {
            if ($seen !== $array) {
                call_user_func($splice, $seen, $fromIndex, 1);
            }
            call_user_func($splice, $array, $fromIndex, 1);
        }
    }
    return $array;
}
return 'basePullAll';
