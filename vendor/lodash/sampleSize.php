<?php
$arraySampleSize = require __DIR__ . '/_arraySampleSize.php';
$baseSampleSize = require __DIR__ . '/_baseSampleSize.php';
$isArray = require __DIR__ . '/isArray.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$toInteger = require __DIR__ . '/toInteger.php';
function sampleSize($collection, $n, $guard) {
    if (($guard ? $isIterateeCall($collection, $n, $guard) : $n === null)) {
        $n = 1;
    } else {
        $n = $toInteger($n);
    }
    $func = ($isArray($collection) ? $arraySampleSize : $baseSampleSize);
    return $func($collection, $n);
}
return 'sampleSize';
