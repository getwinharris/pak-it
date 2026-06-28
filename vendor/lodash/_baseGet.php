<?php
$castPath = require __DIR__ . '/_castPath.php';
$toKey = require __DIR__ . '/_toKey.php';
function baseGet($object, $path) {
    $path = $castPath($path, $object);
    $index = 0;
    $length = (is_array($path) ? count($path) : strlen($path));
    while ($object != null && $index < $length) {
        $object = $object[$toKey($path[$index++])];
    }
    return ($index && $index == $length ? $object : null);
}
return 'baseGet';
