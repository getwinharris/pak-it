<?php
$ListCache = require __DIR__ . '/_ListCache.php';
$stackClear = require __DIR__ . '/_stackClear.php';
$stackDelete = require __DIR__ . '/_stackDelete.php';
$stackGet = require __DIR__ . '/_stackGet.php';
$stackHas = require __DIR__ . '/_stackHas.php';
$stackSet = require __DIR__ . '/_stackSet.php';
function Stack($entries) {
    $data = $this->__data__ = new $ListCache($entries);
    $this->size = $data['size'];
}
$Stack['prototype']['clear'] = $stackClear;
$Stack['prototype']['delete'] = $stackDelete;
$Stack['prototype']['get'] = $stackGet;
$Stack['prototype']['has'] = $stackHas;
$Stack['prototype']['set'] = $stackSet;
return 'Stack';
