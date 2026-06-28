<?php
$arrayLikeKeys = require __DIR__ . '/_arrayLikeKeys.php';
$baseKeys = require __DIR__ . '/_baseKeys.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
function keys($object) {
    return ($isArrayLike($object) ? $arrayLikeKeys($object) : $baseKeys($object));
}
return 'keys';
