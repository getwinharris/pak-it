<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$map = require __DIR__ . '/map.php';
$INFINITY = 1 / 0;
function flatMapDeep($collection, $iteratee) {
    return $baseFlatten($map($collection, $iteratee), $INFINITY);
}
return 'flatMapDeep';
