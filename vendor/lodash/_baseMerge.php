<?php
$Stack = require __DIR__ . '/_Stack.php';
$assignMergeValue = require __DIR__ . '/_assignMergeValue.php';
$baseFor = require __DIR__ . '/_baseFor.php';
$baseMergeDeep = require __DIR__ . '/_baseMergeDeep.php';
$isObject = require __DIR__ . '/isObject.php';
$keysIn = require __DIR__ . '/keysIn.php';
$safeGet = require __DIR__ . '/_safeGet.php';
function baseMerge($object, $source, $srcIndex, $customizer, $stack) {
    if ($object === $source) {
        return;
    }
    $baseFor($source, function($srcValue, $key) {
        $stack || $stack = new $Stack();
        if ($isObject($srcValue)) {
            $baseMergeDeep($object, $source, $key, $srcIndex, $baseMerge, $customizer, $stack);
        } else {
            $newValue = ($customizer ? $customizer($safeGet($object, $key), $srcValue, $key + '', $object, $source, $stack) : null);
            if ($newValue === null) {
                $newValue = $srcValue;
            }
            $assignMergeValue($object, $key, $newValue);
        }
}, $keysIn);
}
return 'baseMerge';
