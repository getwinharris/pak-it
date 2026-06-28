<?php
$nativeCreate = require __DIR__ . '/_nativeCreate.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function hashHas($key) {
    $data = $this->__data__;
    return ($nativeCreate ? $data[$key] !== null : call_user_func($hasOwnProperty, $data, $key));
}
return 'hashHas';
