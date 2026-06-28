<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$regexpTag = '[object RegExp]';
function baseIsRegExp($value) {
    return $isObjectLike($value) && $baseGetTag($value) == $regexpTag;
}
return 'baseIsRegExp';
