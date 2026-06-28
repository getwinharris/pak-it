<?php
$arrayPush = require __DIR__ . '/_arrayPush.php';
$isArray = require __DIR__ . '/isArray.php';
function baseGetAllKeys($object, $keysFunc, $symbolsFunc) {
    $result = $keysFunc($object);
    return ($isArray($object) ? $result : $arrayPush($result, $symbolsFunc($object)));
}
return 'baseGetAllKeys';
