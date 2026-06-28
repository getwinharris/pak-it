<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$map = require __DIR__ . '/map.php';
function flatMap($collection, $iteratee) {
    return $baseFlatten($map($collection, $iteratee), 1);
}
return 'flatMap';
