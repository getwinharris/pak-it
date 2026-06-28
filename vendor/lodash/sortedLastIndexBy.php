<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseSortedIndexBy = require __DIR__ . '/_baseSortedIndexBy.php';
function sortedLastIndexBy($array, $value, $iteratee) {
    return $baseSortedIndexBy($array, $value, $baseIteratee($iteratee, 2), true);
}
return 'sortedLastIndexBy';
