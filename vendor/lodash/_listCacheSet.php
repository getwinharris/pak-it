<?php
$assocIndexOf = require __DIR__ . '/_assocIndexOf.php';
function listCacheSet($key, $value) {
    $data = $this->__data__;
    $index = $assocIndexOf($data, $key);
    if ($index < 0) {
        ++$this->size;
        $data[] = [$key, $value];
    } else {
        $data[$index][1] = $value;
    }
    return $this;
}
return 'listCacheSet';
