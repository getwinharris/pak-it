<?php
$eq = require __DIR__ . '/eq.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function customDefaultsAssignIn($objValue, $srcValue, $key, $object) {
    if ($objValue === null || $eq($objValue, $objectProto[$key]) && !call_user_func($hasOwnProperty, $object, $key)) {
        return $srcValue;
    }
    return $objValue;
}
return 'customDefaultsAssignIn';
