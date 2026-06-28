<?php
$isFunction = require __DIR__ . '/isFunction.php';
$isLength = require __DIR__ . '/isLength.php';
function isArrayLike($value) {
    return $value != null && $isLength((is_array($value) ? count($value) : strlen($value))) && !$isFunction($value);
}
return 'isArrayLike';
