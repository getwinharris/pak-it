<?php
$arrayReduceRight = require __DIR__ . '/_arrayReduceRight.php';
$baseEachRight = require __DIR__ . '/_baseEachRight.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseReduce = require __DIR__ . '/_baseReduce.php';
$isArray = require __DIR__ . '/isArray.php';
function reduceRight($collection, $iteratee, $accumulator) {
    $func = ($isArray($collection) ? $arrayReduceRight : $baseReduce);
    $initAccum = (is_array($arguments) ? count($arguments) : strlen($arguments)) < 3;
    return $func($collection, $baseIteratee($iteratee, 4), $accumulator, $initAccum, $baseEachRight);
}
return 'reduceRight';
