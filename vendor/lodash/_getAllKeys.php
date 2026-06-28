<?php
$baseGetAllKeys = require __DIR__ . '/_baseGetAllKeys.php';
$getSymbols = require __DIR__ . '/_getSymbols.php';
$keys = require __DIR__ . '/keys.php';
function getAllKeys($object) {
    return $baseGetAllKeys($object, $keys, $getSymbols);
}
return 'getAllKeys';
