<?php
$baseKeys = require __DIR__ . '/_baseKeys.php';
$getTag = require __DIR__ . '/_getTag.php';
$isArguments = require __DIR__ . '/isArguments.php';
$isArray = require __DIR__ . '/isArray.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isBuffer = require __DIR__ . '/isBuffer.php';
$isPrototype = require __DIR__ . '/_isPrototype.php';
$isTypedArray = require __DIR__ . '/isTypedArray.php';
$mapTag = '[object Map]';
$setTag = '[object Set]';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function isEmpty($value) {
    if ($value == null) {
        return true;
    }
    if ($isArrayLike($value) && $isArray($value) || is_string($value) || is_callable($value['splice']) || $isBuffer($value) || $isTypedArray($value) || $isArguments($value)) {
        return !(is_array($value) ? count($value) : strlen($value));
    }
    $tag = $getTag($value);
    if ($tag == $mapTag || $tag == $setTag) {
        return !$value['size'];
    }
    if ($isPrototype($value)) {
        return !(is_array($baseKeys($value)) ? count($baseKeys($value)) : strlen($baseKeys($value)));
    }
    foreach ($value as $key => $__value__) {
        if (call_user_func($hasOwnProperty, $value, $key)) {
            return false;
        }
    }
    return true;
}
return 'isEmpty';
