<?php
$ListCache = require __DIR__ . '/_ListCache.php';
function stackClear() {
    $this->__data__ = new $ListCache();
    $this->size = 0;
}
return 'stackClear';
