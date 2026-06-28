<?php
$assignValue = require __DIR__ . '/_assignValue.php';
$castPath = require __DIR__ . '/_castPath.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$isObject = require __DIR__ . '/isObject.php';
$toKey = require __DIR__ . '/_toKey.php';
function baseSet($object, $path, $value, $customizer) {
    if (!$isObject($object)) {
        return $object;
    }
    $path = $castPath($path, $object);
    $index = -1;
    $length = (is_array($path) ? count($path) : strlen($path));
    $lastIndex = $length - 1;
    $nested = $object;
    while ($nested != null && ++$index < $length) {
        $key = $toKey($path[$index]);
        $newValue = $value;
        if ($key === '__proto__' || $key === 'constructor' || $key === 'prototype') {
            return $object;
        }
        if ($index != $lastIndex) {
            $objValue = $nested[$key];
            $newValue = ($customizer ? $customizer($objValue, $key, $nested) : null);
            if ($newValue === null) {
                $newValue = ($isObject($objValue) ? $objValue : ($isIndex($path[$index + 1]) ? [] : []));
            }
        }
        $assignValue($nested, $key, $newValue);
        $nested = $nested[$key];
    }
    return $object;
}
return 'baseSet';
