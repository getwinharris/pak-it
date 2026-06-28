<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$shuffleSelf = require __DIR__ . '/_shuffleSelf.php';
$values = require __DIR__ . '/values.php';
function baseSampleSize($collection, $n) {
    $array = $values($collection);
    return $shuffleSelf($array, $baseClamp($n, 0, (is_array($array) ? count($array) : strlen($array))));
}
return 'baseSampleSize';
