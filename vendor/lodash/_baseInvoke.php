<?php
$apply = require __DIR__ . '/_apply.php';
$castPath = require __DIR__ . '/_castPath.php';
$last = require __DIR__ . '/last.php';
$parent = require __DIR__ . '/_parent.php';
$toKey = require __DIR__ . '/_toKey.php';
function baseInvoke($object, $path, $args) {
    $path = $castPath($path, $object);
    $object = $parent($object, $path);
    $func = ($object == null ? $object : $object[$toKey($last($path))]);
    return ($func == null ? null : $apply($func, $object, $args));
}
return 'baseInvoke';
