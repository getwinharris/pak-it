<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$getSymbolsIn = require __DIR__ . '/_getSymbolsIn.php';
function copySymbolsIn($source, $object) {
    return $copyObject($source, $getSymbolsIn($source), $object);
}
return 'copySymbolsIn';
