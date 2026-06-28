<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$eq = require __DIR__ . '/eq.php';
function assignMergeValue($object, $key, $value) {
    if ($value !== null && !$eq($object[$key], $value) || $value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false)) {
        $baseAssignValue($object, $key, $value);
    }
}
return 'assignMergeValue';
