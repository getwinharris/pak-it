<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseSortedUniq = require __DIR__ . '/_baseSortedUniq.php';
function sortedUniqBy($array, $iteratee) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSortedUniq($array, $baseIteratee($iteratee, 2)) : []);
}
return 'sortedUniqBy';
