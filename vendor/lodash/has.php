<?php
$baseHas = require __DIR__ . '/_baseHas.php';
$hasPath = require __DIR__ . '/_hasPath.php';
function has($object, $path) {
    return $object != null && $hasPath($object, $path, $baseHas);
}
return 'has';
