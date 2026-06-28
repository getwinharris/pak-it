<?php
$isPrototype = require __DIR__ . '/_isPrototype.php';
$nativeKeys = require __DIR__ . '/_nativeKeys.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function baseKeys($object) {
    if (!$isPrototype($object)) {
        return $nativeKeys($object);
    }
    $result = [];
    foreach (Object($object) as $key => $__value__) {
        if (call_user_func($hasOwnProperty, $object, $key) && $key != 'constructor') {
            $result[] = $key;
        }
    }
    return $result;
}
return 'baseKeys';
