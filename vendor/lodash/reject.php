<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$baseFilter = require __DIR__ . '/_baseFilter.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$isArray = require __DIR__ . '/isArray.php';
$negate = require __DIR__ . '/negate.php';
function reject($collection, $predicate) {
    $func = ($isArray($collection) ? $arrayFilter : $baseFilter);
    return $func($collection, $negate($baseIteratee($predicate, 3)));
}
return 'reject';
