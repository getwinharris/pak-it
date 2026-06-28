<?php
$arrayEach = require __DIR__ . '/_arrayEach.php';
$baseEach = require __DIR__ . '/_baseEach.php';
$castFunction = require __DIR__ . '/_castFunction.php';
$isArray = require __DIR__ . '/isArray.php';
function _forEach($collection, $iteratee) {
    $func = ($isArray($collection) ? $arrayEach : $baseEach);
    return $func($collection, $castFunction($iteratee));
}
return 'forEach';
