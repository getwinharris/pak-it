<?php
$copyObject = require __DIR__ . '/_copyObject.php';
$keysIn = require __DIR__ . '/keysIn.php';
function toPlainObject($value) {
    return $copyObject($value, $keysIn($value));
}
return 'toPlainObject';
