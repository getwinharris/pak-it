<?php
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
function isArrayLikeObject($value) {
    return $isObjectLike($value) && $isArrayLike($value);
}
return 'isArrayLikeObject';
