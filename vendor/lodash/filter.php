<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$baseFilter = require __DIR__ . '/_baseFilter.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$isArray = require __DIR__ . '/isArray.php';
function filter($collection, $predicate) {
    $func = ($isArray($collection) ? $arrayFilter : $baseFilter);
    return $func($collection, $baseIteratee($predicate, 3));
}
return 'filter';
