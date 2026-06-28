<?php
$baseGet = require __DIR__ . '/_baseGet.php';
$baseSlice = require __DIR__ . '/_baseSlice.php';
function parent($object, $path) {
    return ((is_array($path) ? count($path) : strlen($path)) < 2 ? $object : $baseGet($object, $baseSlice($path, 0, -1)));
}
return 'parent';
