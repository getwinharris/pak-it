<?php
$arraySample = require __DIR__ . '/_arraySample.php';
$baseSample = require __DIR__ . '/_baseSample.php';
$isArray = require __DIR__ . '/isArray.php';
function sample($collection) {
    $func = ($isArray($collection) ? $arraySample : $baseSample);
    return $func($collection);
}
return 'sample';
