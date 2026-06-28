<?php
$baseFindIndex = require __DIR__ . '/_baseFindIndex.php';
$baseIsNaN = require __DIR__ . '/_baseIsNaN.php';
$strictIndexOf = require __DIR__ . '/_strictIndexOf.php';
function baseIndexOf($array, $value, $fromIndex) {
    return ($value === $value ? $strictIndexOf($array, $value, $fromIndex) : $baseFindIndex($array, $baseIsNaN, $fromIndex));
}
return 'baseIndexOf';
