<?php
$assocIndexOf = require __DIR__ . '/_assocIndexOf.php';
$arrayProto = 'Array'['prototype'];
$splice = $arrayProto['splice'];
function listCacheDelete($key) {
    $data = $this->__data__;
    $index = $assocIndexOf($data, $key);
    if ($index < 0) {
        return false;
    }
    $lastIndex = (is_array($data) ? count($data) : strlen($data)) - 1;
    if ($index == $lastIndex) {
        array_pop($data);
    } else {
        call_user_func($splice, $data, $index, 1);
    }
    --$this->size;
    return true;
}
return 'listCacheDelete';
