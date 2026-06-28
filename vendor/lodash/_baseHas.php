<?php
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function baseHas($object, $key) {
    return $object != null && call_user_func($hasOwnProperty, $object, $key);
}
return 'baseHas';
