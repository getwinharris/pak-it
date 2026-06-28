<?php
$baseIsNative = require __DIR__ . '/_baseIsNative.php';
$getValue = require __DIR__ . '/_getValue.php';
function getNative($object, $key) {
    $value = $getValue($object, $key);
    return ($baseIsNative($value) ? $value : null);
}
return 'getNative';
