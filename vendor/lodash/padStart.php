<?php
$createPadding = require __DIR__ . '/_createPadding.php';
$stringSize = require __DIR__ . '/_stringSize.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toString = require __DIR__ . '/toString.php';
function padStart($string, $length, $chars) {
    $string = $toString($string);
    $length = $toInteger($length);
    $strLength = ($length ? $stringSize($string) : 0);
    return ($length && $strLength < $length ? $createPadding($length - $strLength, $chars) + $string : $string);
}
return 'padStart';
