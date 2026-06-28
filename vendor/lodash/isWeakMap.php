<?php
$getTag = require __DIR__ . '/_getTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$weakMapTag = '[object WeakMap]';
function isWeakMap($value) {
    return $isObjectLike($value) && $getTag($value) == $weakMapTag;
}
return 'isWeakMap';
