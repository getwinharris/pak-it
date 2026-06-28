<?php
$baseGet = require __DIR__ . '/_baseGet.php';
$baseSet = require __DIR__ . '/_baseSet.php';
$castPath = require __DIR__ . '/_castPath.php';
function basePickBy($object, $paths, $predicate) {
    $index = -1;
    $length = (is_array($paths) ? count($paths) : strlen($paths));
    $result = [];
    while (++$index < $length) {
        $path = $paths[$index];
        $value = $baseGet($object, $path);
        if ($predicate($value, $path)) {
            $baseSet($result, $castPath($path, $object), $value);
        }
    }
    return $result;
}
return 'basePickBy';
