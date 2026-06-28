<?php
$baseSortedIndex = require __DIR__ . '/_baseSortedIndex.php';
$eq = require __DIR__ . '/eq.php';
function sortedLastIndexOf($array, $value) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if ($length) {
        $index = $baseSortedIndex($array, $value, true) - 1;
        if ($eq($array[$index], $value)) {
            return $index;
        }
    }
    return -1;
}
return 'sortedLastIndexOf';
