<?php
$getTag = require __DIR__ . '/_getTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$setTag = '[object Set]';
function baseIsSet($value) {
    return $isObjectLike($value) && $getTag($value) == $setTag;
}
return 'baseIsSet';
