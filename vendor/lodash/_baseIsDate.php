<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$dateTag = '[object Date]';
function baseIsDate($value) {
    return $isObjectLike($value) && $baseGetTag($value) == $dateTag;
}
return 'baseIsDate';
