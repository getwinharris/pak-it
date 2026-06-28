<?php
$nativeCreate = require __DIR__ . '/_nativeCreate.php';
$HASH_UNDEFINED = '__lodash_hash_undefined__';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function hashGet($key) {
    $data = $this->__data__;
    if ($nativeCreate) {
        $result = $data[$key];
        return ($result === $HASH_UNDEFINED ? null : $result);
    }
    return (call_user_func($hasOwnProperty, $data, $key) ? $data[$key] : null);
}
return 'hashGet';
