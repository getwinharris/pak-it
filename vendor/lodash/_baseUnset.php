<?php
$castPath = require __DIR__ . '/_castPath.php';
$last = require __DIR__ . '/last.php';
$parent = require __DIR__ . '/_parent.php';
$toKey = require __DIR__ . '/_toKey.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function baseUnset($object, $path) {
    $path = $castPath($path, $object);
    $index = -1;
    $length = (is_array($path) ? count($path) : strlen($path));
    if (!$length) {
        return true;
    }
    while (++$index < $length) {
        $key = $toKey($path[$index]);
        if ($key === '__proto__' && !call_user_func($hasOwnProperty, $object, '__proto__')) {
            return false;
        }
        if ($key === 'constructor' || $key === 'prototype' && $index < $length - 1) {
            return false;
        }
    }
    $obj = $parent($object, $path);
    return $obj == null || (static function() { if (isset($obj[$toKey($last($path))])) { unset($obj[$toKey($last($path))]); return true; } return true; })();
}
return 'baseUnset';
