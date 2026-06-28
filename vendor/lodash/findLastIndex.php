<?php
$baseFindIndex = require __DIR__ . '/_baseFindIndex.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$toInteger = require __DIR__ . '/toInteger.php';
$nativeMax = max;
$nativeMin = min;
function findLastIndex($array, $predicate, $fromIndex) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return -1;
    }
    $index = $length - 1;
    if ($fromIndex !== null) {
        $index = $toInteger($fromIndex);
        $index = ($fromIndex < 0 ? $nativeMax($length + $index, 0) : $nativeMin($index, $length - 1));
    }
    return $baseFindIndex($array, $baseIteratee($predicate, 3), $index, true);
}
return 'findLastIndex';
