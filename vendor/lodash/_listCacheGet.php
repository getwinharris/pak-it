<?php
$assocIndexOf = require __DIR__ . '/_assocIndexOf.php';
function listCacheGet($key) {
    $data = $this->__data__;
    $index = $assocIndexOf($data, $key);
    return ($index < 0 ? null : $data[$index][1]);
}
return 'listCacheGet';
