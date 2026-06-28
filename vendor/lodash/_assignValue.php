<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$eq = require __DIR__ . '/eq.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function assignValue($object, $key, $value) {
    $objValue = $object[$key];
    if (!call_user_func($hasOwnProperty, $object, $key) && $eq($objValue, $value) || $value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
        $baseAssignValue($object, $key, $value);
    }
}
return 'assignValue';
