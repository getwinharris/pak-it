<?php
$arrayPush = require __DIR__ . '/_arrayPush.php';
$getPrototype = require __DIR__ . '/_getPrototype.php';
$getSymbols = require __DIR__ . '/_getSymbols.php';
$stubArray = require __DIR__ . '/stubArray.php';
$nativeGetSymbols = Object['getOwnPropertySymbols'];
$getSymbolsIn = (!$nativeGetSymbols ? $stubArray : function($object) {
        $result = [];
        while ($object) {
            $arrayPush($result, $getSymbols($object));
            $object = $getPrototype($object);
        }
        return $result;
});
return 'getSymbolsIn';
