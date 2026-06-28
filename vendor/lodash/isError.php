<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$isPlainObject = require __DIR__ . '/isPlainObject.php';
$domExcTag = '[object DOMException]';
$errorTag = '[object Error]';
function isError($value) {
    if (!$isObjectLike($value)) {
        return false;
    }
    $tag = $baseGetTag($value);
    return $tag == $errorTag || $tag == $domExcTag || is_string($value['message']) && is_string($value['name']) && !$isPlainObject($value);
}
return 'isError';
