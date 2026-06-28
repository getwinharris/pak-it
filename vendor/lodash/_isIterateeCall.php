<?php
$eq = require __DIR__ . '/eq.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$isObject = require __DIR__ . '/isObject.php';
function isIterateeCall($value, $index, $object) {
    if (!$isObject($object)) {
        return false;
    }
    $type = $index;
    if (($type == 'number' ? $isArrayLike($object) && $isIndex($index, (is_array($object) ? count($object) : strlen($object))) : $type == 'string' && (is_array($object) ? (array_key_exists($index, $object) || in_array($index, $object)) : false))) {
        return $eq($object[$index], $value);
    }
    return false;
}
return 'isIterateeCall';
