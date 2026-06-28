<?php
$baseFindIndex = require __DIR__ . '/_baseFindIndex.php';
$baseIsNaN = require __DIR__ . '/_baseIsNaN.php';
$strictLastIndexOf = require __DIR__ . '/_strictLastIndexOf.php';
$toInteger = require __DIR__ . '/toInteger.php';
$nativeMax = max;
$nativeMin = min;
function lastIndexOf($array, $value, $fromIndex) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return -1;
    }
    $index = $length;
    if ($fromIndex !== null) {
        $index = $toInteger($fromIndex);
        $index = ($index < 0 ? $nativeMax($length + $index, 0) : $nativeMin($index, $length - 1));
    }
    return ($value === $value ? $strictLastIndexOf($array, $value, $index) : $baseFindIndex($array, $baseIsNaN, $index, true));
}
return 'lastIndexOf';
