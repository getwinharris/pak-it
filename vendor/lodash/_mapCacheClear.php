<?php
$Hash = require __DIR__ . '/_Hash.php';
$ListCache = require __DIR__ . '/_ListCache.php';
$Map = require __DIR__ . '/_Map.php';
function mapCacheClear() {
    $this->size = 0;
    $this->__data__ = [
        'hash' => new $Hash(),
        'map' => new $Map || $ListCache(),
        'string' => new $Hash()
    ];
}
return 'mapCacheClear';
