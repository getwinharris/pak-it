<?php
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$isPlainObject = require __DIR__ . '/isPlainObject.php';
function isElement($value) {
    return $isObjectLike($value) && $value['nodeType'] === 1 && !$isPlainObject($value);
}
return 'isElement';
