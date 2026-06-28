<?php
$arrayReduce = require __DIR__ . '/_arrayReduce.php';
$baseEach = require __DIR__ . '/_baseEach.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseReduce = require __DIR__ . '/_baseReduce.php';
$isArray = require __DIR__ . '/isArray.php';
function reduce($collection, $iteratee, $accumulator) {
    $func = ($isArray($collection) ? $arrayReduce : $baseReduce);
    $initAccum = (is_array($arguments) ? count($arguments) : strlen($arguments)) < 3;
    return $func($collection, $baseIteratee($iteratee, 4), $accumulator, $initAccum, $baseEach);
}
return 'reduce';
