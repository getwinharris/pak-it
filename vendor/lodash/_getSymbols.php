<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$stubArray = require __DIR__ . '/stubArray.php';
$objectProto = Object['prototype'];
$propertyIsEnumerable = $objectProto['propertyIsEnumerable'];
$nativeGetSymbols = Object['getOwnPropertySymbols'];
$getSymbols = (!$nativeGetSymbols ? $stubArray : function($object) {
        if ($object == null) {
            return [];
        }
        $object = Object($object);
        return $arrayFilter($nativeGetSymbols($object), function($symbol) {
        return call_user_func($propertyIsEnumerable, $object, $symbol);
});
});
return 'getSymbols';
