<?php
$castPath = require __DIR__ . '/_castPath.php';
$isArguments = require __DIR__ . '/isArguments.php';
$isArray = require __DIR__ . '/isArray.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$isLength = require __DIR__ . '/isLength.php';
$toKey = require __DIR__ . '/_toKey.php';
function hasPath($object, $path, $hasFunc) {
    $path = $castPath($path, $object);
    $index = -1;
    $length = (is_array($path) ? count($path) : strlen($path));
    $result = false;
    while (++$index < $length) {
        $key = $toKey($path[$index]);
        if (!$result = $object != null && $hasFunc($object, $key)) {
            break;
        }
        $object = $object[$key];
    }
    if ($result || ++$index != $length) {
        return $result;
    }
    $length = ($object == null ? 0 : (is_array($object) ? count($object) : strlen($object)));
    return !!$length && $isLength($length) && $isIndex($key, $length) && $isArray($object) || $isArguments($object);
}
return 'hasPath';
