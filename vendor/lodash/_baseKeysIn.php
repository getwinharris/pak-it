<?php
$isObject = require __DIR__ . '/isObject.php';
$isPrototype = require __DIR__ . '/_isPrototype.php';
$nativeKeysIn = require __DIR__ . '/_nativeKeysIn.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function baseKeysIn($object) {
    if (!$isObject($object)) {
        return $nativeKeysIn($object);
    }
    $isProto = $isPrototype($object);
    $result = [];
    foreach ($object as $key => $__value__) {
        if (!$key == 'constructor' && $isProto || !call_user_func($hasOwnProperty, $object, $key)) {
            $result[] = $key;
        }
    }
    return $result;
}
return 'baseKeysIn';
