<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$baseToString = require __DIR__ . '/_baseToString.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toString = require __DIR__ . '/toString.php';
function endsWith($string, $target, $position) {
    $string = $toString($string);
    $target = $baseToString($target);
    $length = (is_array($string) ? count($string) : strlen($string));
    $position = ($position === null ? $length : $baseClamp($toInteger($position), 0, $length));
    $end = $position;
    $position -= (is_array($target) ? count($target) : strlen($target));
    return $position >= 0 && array_slice($position, $end, $string) == $target;
}
return 'endsWith';
