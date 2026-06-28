<?php
$arrayShuffle = require __DIR__ . '/_arrayShuffle.php';
$baseShuffle = require __DIR__ . '/_baseShuffle.php';
$isArray = require __DIR__ . '/isArray.php';
function _shuffle($collection) {
    $func = ($isArray($collection) ? $arrayShuffle : $baseShuffle);
    return $func($collection);
}
return '_shuffle';
