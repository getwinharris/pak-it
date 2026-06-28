<?php
$getTag = require __DIR__ . '/_getTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$mapTag = '[object Map]';
function baseIsMap($value) {
    return $isObjectLike($value) && $getTag($value) == $mapTag;
}
return 'baseIsMap';
