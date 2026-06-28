<?php
$objectProto = Object['prototype'];
$nativeObjectToString = $objectProto['toString'];
function objectToString($value) {
    return call_user_func($nativeObjectToString, $value);
}
return 'objectToString';
