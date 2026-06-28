<?php
$baseSortedIndex = require __DIR__ . '/_baseSortedIndex.php';
function sortedLastIndex($array, $value) {
    return $baseSortedIndex($array, $value, true);
}
return 'sortedLastIndex';
