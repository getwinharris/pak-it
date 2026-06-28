<?php
$arrayLikeKeys = require __DIR__ . '/_arrayLikeKeys.php';
$baseKeysIn = require __DIR__ . '/_baseKeysIn.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
function keysIn($object) {
    return ($isArrayLike($object) ? $arrayLikeKeys($object, true) : $baseKeysIn($object));
}
return 'keysIn';
