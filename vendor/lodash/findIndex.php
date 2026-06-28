<?php
$baseFindIndex = require __DIR__ . '/_baseFindIndex.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$toInteger = require __DIR__ . '/toInteger.php';
$nativeMax = max;
function findIndex($array, $predicate, $fromIndex) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return -1;
    }
    $index = ($fromIndex == null ? 0 : $toInteger($fromIndex));
    if ($index < 0) {
        $index = $nativeMax($length + $index, 0);
    }
    return $baseFindIndex($array, $baseIteratee($predicate, 3), $index);
}
return 'findIndex';
