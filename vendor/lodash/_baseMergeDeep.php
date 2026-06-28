<?php
$assignMergeValue = require __DIR__ . '/_assignMergeValue.php';
$cloneBuffer = require __DIR__ . '/_cloneBuffer.php';
$cloneTypedArray = require __DIR__ . '/_cloneTypedArray.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$initCloneObject = require __DIR__ . '/_initCloneObject.php';
$isArguments = require __DIR__ . '/isArguments.php';
$isArray = require __DIR__ . '/isArray.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$isBuffer = require __DIR__ . '/isBuffer.php';
$isFunction = require __DIR__ . '/isFunction.php';
$isObject = require __DIR__ . '/isObject.php';
$isPlainObject = require __DIR__ . '/isPlainObject.php';
$isTypedArray = require __DIR__ . '/isTypedArray.php';
$safeGet = require __DIR__ . '/_safeGet.php';
$toPlainObject = require __DIR__ . '/toPlainObject.php';
function baseMergeDeep($object, $source, $key, $srcIndex, $mergeFunc, $customizer, $stack) {
    $objValue = $safeGet($object, $key);
    $srcValue = $safeGet($source, $key);
    $stacked = $stack['get']($srcValue);
    if ($stacked) {
        $assignMergeValue($object, $key, $stacked);
        return;
    }
    $newValue = ($customizer ? $customizer($objValue, $srcValue, $key + '', $object, $source, $stack) : null);
    $isCommon = $newValue === null;
    if ($isCommon) {
        $isArr = $isArray($srcValue);
        $isBuff = !$isArr && $isBuffer($srcValue);
        $isTyped = !$isArr && !$isBuff && $isTypedArray($srcValue);
        $newValue = $srcValue;
        if ($isArr || $isBuff || $isTyped) {
            if ($isArray($objValue)) {
                $newValue = $objValue;
            } else if ($isArrayLikeObject($objValue)) {
                $newValue = $copyArray($objValue);
            } else if ($isBuff) {
                $isCommon = false;
                $newValue = $cloneBuffer($srcValue, true);
            } else if ($isTyped) {
                $isCommon = false;
                $newValue = $cloneTypedArray($srcValue, true);
            } else {
                $newValue = [];
            }
        } else if ($isPlainObject($srcValue) || $isArguments($srcValue)) {
            $newValue = $objValue;
            if ($isArguments($objValue)) {
                $newValue = $toPlainObject($objValue);
            } else if (!$isObject($objValue) || $isFunction($objValue)) {
                $newValue = $initCloneObject($srcValue);
            }
        } else {
            $isCommon = false;
        }
    }
    if ($isCommon) {
        $stack['set']($srcValue, $newValue);
        $mergeFunc($newValue, $srcValue, $srcIndex, $customizer, $stack);
        $stack['delete']($srcValue);
    }
    $assignMergeValue($object, $key, $newValue);
}
return 'baseMergeDeep';
