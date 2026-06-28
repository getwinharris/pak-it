<?php
$nativeCreate = require __DIR__ . '/_nativeCreate.php';
function hashClear() {
    $this->__data__ = ($nativeCreate ? $nativeCreate(null) : []);
    $this->size = 0;
}
return 'hashClear';
