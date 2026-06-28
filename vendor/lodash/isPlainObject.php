<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$getPrototype = require __DIR__ . '/_getPrototype.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$objectTag = '[object Object]';
$funcProto = 'Function'['prototype'];
$objectProto = Object['prototype'];
$funcToString = $funcProto['toString'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$objectCtorString = call_user_func($funcToString, Object);
function isPlainObject($value) {
    if (!$isObjectLike($value) || $baseGetTag($value) != $objectTag) {
        return false;
    }
    $proto = $getPrototype($value);
    if ($proto === null) {
        return true;
    }
    $Ctor = call_user_func($hasOwnProperty, $proto, 'constructor') && $proto['constructor'];
    return is_callable($Ctor) && $Ctor instanceof $Ctor && call_user_func($funcToString, $Ctor) == $objectCtorString;
}
return 'isPlainObject';
