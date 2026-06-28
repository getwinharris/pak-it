<?php
$castPath = require __DIR__ . '/_castPath.php';
$isFunction = require __DIR__ . '/isFunction.php';
$toKey = require __DIR__ . '/_toKey.php';
function result($object, $path, $defaultValue) {
    $path = $castPath($path, $object);
    $index = -1;
    $length = (is_array($path) ? count($path) : strlen($path));
    if (!$length) {
        $length = 1;
        $object = null;
    }
    while (++$index < $length) {
        $value = ($object == null ? null : $object[$toKey($path[$index])]);
        if ($value === null) {
            $index = $length;
            $value = $defaultValue;
        }
        $object = ($isFunction($value) ? call_user_func($value, $object) : $value);
    }
    return $object;
}
return 'result';
