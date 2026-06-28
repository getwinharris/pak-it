<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseMap = require __DIR__ . '/_baseMap.php';
$isArray = require __DIR__ . '/isArray.php';
function map($collection, $iteratee) {
    $func = ($isArray($collection) ? $arrayMap : $baseMap);
    return $func($collection, $baseIteratee($iteratee, 3));
}
return 'map';
