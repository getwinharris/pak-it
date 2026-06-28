<?php
$baseGetAllKeys = require __DIR__ . '/_baseGetAllKeys.php';
$getSymbolsIn = require __DIR__ . '/_getSymbolsIn.php';
$keysIn = require __DIR__ . '/keysIn.php';
function getAllKeysIn($object) {
    return $baseGetAllKeys($object, $keysIn, $getSymbolsIn);
}
return 'getAllKeysIn';
