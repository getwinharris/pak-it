<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$symbolTag = '[object Symbol]';
function isSymbol($value) {
    return false || $isObjectLike($value) && $baseGetTag($value) == $symbolTag;
}
return 'isSymbol';
