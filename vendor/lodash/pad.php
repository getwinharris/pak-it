<?php
$createPadding = require __DIR__ . '/_createPadding.php';
$stringSize = require __DIR__ . '/_stringSize.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toString = require __DIR__ . '/toString.php';
$nativeCeil = ceil;
$nativeFloor = floor;
function pad($string, $length, $chars) {
    $string = $toString($string);
    $length = $toInteger($length);
    $strLength = ($length ? $stringSize($string) : 0);
    if (!$length || $strLength >= $length) {
        return $string;
    }
    $mid = $length - $strLength / 2;
    return $createPadding($nativeFloor($mid), $chars) + $string + $createPadding($nativeCeil($mid), $chars);
}
return 'pad';
