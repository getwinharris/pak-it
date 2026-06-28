<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$shuffleSelf = require __DIR__ . '/_shuffleSelf.php';
function arraySampleSize($array, $n) {
    return $shuffleSelf($copyArray($array), $baseClamp($n, 0, (is_array($array) ? count($array) : strlen($array))));
}
return 'arraySampleSize';
