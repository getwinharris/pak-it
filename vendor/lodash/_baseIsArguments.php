<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$argsTag = '[object Arguments]';
function baseIsArguments($value) {
    return $isObjectLike($value) && $baseGetTag($value) == $argsTag;
}
return 'baseIsArguments';
