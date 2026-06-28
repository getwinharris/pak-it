<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$boolTag = '[object Boolean]';
function isBoolean($value) {
    return $value === true || $value === false || $isObjectLike($value) && $baseGetTag($value) == $boolTag;
}
return 'isBoolean';
