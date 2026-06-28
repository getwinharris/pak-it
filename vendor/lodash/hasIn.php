<?php
$baseHasIn = require __DIR__ . '/_baseHasIn.php';
$hasPath = require __DIR__ . '/_hasPath.php';
function hasIn($object, $path) {
    return $object != null && $hasPath($object, $path, $baseHasIn);
}
return 'hasIn';
