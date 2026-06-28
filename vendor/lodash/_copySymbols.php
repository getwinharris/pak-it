<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$getSymbols = require __DIR__ . '/_getSymbols.php';
function copySymbols($source, $object) {
    return $copyObject($source, $getSymbols($source), $object);
}
return 'copySymbols';
