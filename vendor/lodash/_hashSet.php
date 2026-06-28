<?php
$nativeCreate = require __DIR__ . '/_nativeCreate.php';
$HASH_UNDEFINED = '__lodash_hash_undefined__';
function hashSet($key, $value) {
    $data = $this->__data__;
    $this->size += ($this->has($key) ? 0 : 1);
    $data[$key] = ($nativeCreate && $value === null ? $HASH_UNDEFINED : $value);
    return $this;
}
return 'hashSet';
