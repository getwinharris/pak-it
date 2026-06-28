<?php
$baseIndexOf = require __DIR__ . '/_baseIndexOf.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isString = require __DIR__ . '/isString.php';
$toInteger = require __DIR__ . '/toInteger.php';
$values = require __DIR__ . '/values.php';
$nativeMax = max;
function includes($collection, $value, $fromIndex, $guard) {
    $collection = ($isArrayLike($collection) ? $collection : $values($collection));
    $fromIndex = ($fromIndex && !$guard ? $toInteger($fromIndex) : 0);
    $length = (is_array($collection) ? count($collection) : strlen($collection));
    if ($fromIndex < 0) {
        $fromIndex = $nativeMax($length + $fromIndex, 0);
    }
    return ($isString($collection) ? $fromIndex <= $length && array_search($value, $fromIndex, $collection) > -1 : !!$length && $baseIndexOf($collection, $value, $fromIndex) > -1);
}
return 'includes';
