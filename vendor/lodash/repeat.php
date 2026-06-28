<?php
$baseRepeat = require __DIR__ . '/_baseRepeat.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toString = require __DIR__ . '/toString.php';
function repeat($string, $n, $guard) {
    if (($guard ? $isIterateeCall($string, $n, $guard) : $n === null)) {
        $n = 1;
    } else {
        $n = $toInteger($n);
    }
    return $baseRepeat($toString($string), $n);
}
return 'repeat';
