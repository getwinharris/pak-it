<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$numberTag = '[object Number]';
function isNumber($value) {
    return is_numeric($value) || $isObjectLike($value) && $baseGetTag($value) == $numberTag;
}
return 'isNumber';
