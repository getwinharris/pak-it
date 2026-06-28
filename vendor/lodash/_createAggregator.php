<?php
$arrayAggregator = require __DIR__ . '/_arrayAggregator.php';
$baseAggregator = require __DIR__ . '/_baseAggregator.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$isArray = require __DIR__ . '/isArray.php';
function createAggregator($setter, $initializer) {
    return function($collection, $iteratee) {
        $func = ($isArray($collection) ? $arrayAggregator : $baseAggregator);
        $accumulator = ($initializer ? $initializer() : []);
        return $func($collection, $setter, $baseIteratee($iteratee, 2), $accumulator);
};
}
return 'createAggregator';
