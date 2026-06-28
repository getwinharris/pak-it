<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$arrayBufferTag = '[object ArrayBuffer]';
function baseIsArrayBuffer($value) {
    return $isObjectLike($value) && $baseGetTag($value) == $arrayBufferTag;
}
return 'baseIsArrayBuffer';
