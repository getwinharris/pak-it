<?php
$baseMerge = require __DIR__ . '/_baseMerge.php';
$isObject = require __DIR__ . '/isObject.php';
function customDefaultsMerge($objValue, $srcValue, $key, $object, $source, $stack) {
    if ($isObject($objValue) && $isObject($srcValue)) {
        $stack['set']($srcValue, $objValue);
        $baseMerge($objValue, $srcValue, null, $customDefaultsMerge, $stack);
        $stack['delete']($srcValue);
    }
    return $objValue;
}
return 'customDefaultsMerge';
