<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$baseToString = require __DIR__ . '/_baseToString.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toString = require __DIR__ . '/toString.php';
function startsWith($string, $target, $position) {
    $string = $toString($string);
    $position = ($position == null ? 0 : $baseClamp($toInteger($position), 0, (is_array($string) ? count($string) : strlen($string))));
    $target = $baseToString($target);
    return array_slice($position, $position + (is_array($target) ? count($target) : strlen($target)), $string) == $target;
}
return 'startsWith';
