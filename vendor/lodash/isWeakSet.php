<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$weakSetTag = '[object WeakSet]';
function isWeakSet($value) {
    return $isObjectLike($value) && $baseGetTag($value) == $weakSetTag;
}
return 'isWeakSet';
