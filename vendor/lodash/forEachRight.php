<?php
$arrayEachRight = require __DIR__ . '/_arrayEachRight.php';
$baseEachRight = require __DIR__ . '/_baseEachRight.php';
$castFunction = require __DIR__ . '/_castFunction.php';
$isArray = require __DIR__ . '/isArray.php';
function forEachRight($collection, $iteratee) {
    $func = ($isArray($collection) ? $arrayEachRight : $baseEachRight);
    return $func($collection, $castFunction($iteratee));
}
return 'forEachRight';
