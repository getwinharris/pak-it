<?php
$assocIndexOf = require __DIR__ . '/_assocIndexOf.php';
function listCacheHas($key) {
    return $assocIndexOf($this->__data__, $key) > -1;
}
return 'listCacheHas';
