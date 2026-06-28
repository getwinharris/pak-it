<?php
$baseKeys = require __DIR__ . '/_baseKeys.php';
$getTag = require __DIR__ . '/_getTag.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isString = require __DIR__ . '/isString.php';
$stringSize = require __DIR__ . '/_stringSize.php';
$mapTag = '[object Map]';
$setTag = '[object Set]';
function size($collection) {
    if ($collection == null) {
        return 0;
    }
    if ($isArrayLike($collection)) {
        return ($isString($collection) ? $stringSize($collection) : (is_array($collection) ? count($collection) : strlen($collection)));
    }
    $tag = $getTag($collection);
    if ($tag == $mapTag || $tag == $setTag) {
        return $collection['size'];
    }
    return (is_array($baseKeys($collection)) ? count($baseKeys($collection)) : strlen($baseKeys($collection)));
}
return 'size';
