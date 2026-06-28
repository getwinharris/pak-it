<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$map = require __DIR__ . '/map.php';
$toInteger = require __DIR__ . '/toInteger.php';
function flatMapDepth($collection, $iteratee, $depth) {
    $depth = ($depth === null ? 1 : $toInteger($depth));
    return $baseFlatten($map($collection, $iteratee), $depth);
}
return 'flatMapDepth';
