<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isArray = require __DIR__ . '/isArray.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$stringTag = '[object String]';
function isString($value) {
    return is_string($value) || !$isArray($value) && $isObjectLike($value) && $baseGetTag($value) == $stringTag;
}
return 'isString';
