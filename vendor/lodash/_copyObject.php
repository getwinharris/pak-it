<?php
$assignValue = require __DIR__ . '/_assignValue.php';
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
function copyObject($source, $props, $object, $customizer) {
    $isNew = !$object;
    $object || $object = [];
    $index = -1;
    $length = (is_array($props) ? count($props) : strlen($props));
    while (++$index < $length) {
        $key = $props[$index];
        $newValue = ($customizer ? $customizer($object[$key], $source[$key], $key, $object, $source) : null);
        if ($newValue === null) {
            $newValue = $source[$key];
        }
        if ($isNew) {
            $baseAssignValue($object, $key, $newValue);
        } else {
            $assignValue($object, $key, $newValue);
        }
    }
    return $object;
}
return 'copyObject';
