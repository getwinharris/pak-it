<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseClone = require __DIR__ . '/_baseClone.php';
$baseUnset = require __DIR__ . '/_baseUnset.php';
$castPath = require __DIR__ . '/_castPath.php';
$copyObject = require __DIR__ . '/_copyObject.php';
$customOmitClone = require __DIR__ . '/_customOmitClone.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$getAllKeysIn = require __DIR__ . '/_getAllKeysIn.php';
$CLONE_DEEP_FLAG = 1;
$CLONE_FLAT_FLAG = 2;
$CLONE_SYMBOLS_FLAG = 4;
$omit = $flatRest(function($object, $paths) {
        $result = [];
        if ($object == null) {
            return $result;
        }
        $isDeep = false;
        $paths = $arrayMap($paths, function($path) {
        $path = $castPath($path, $object);
        $isDeep || $isDeep = (is_array($path) ? count($path) : strlen($path)) > 1;
        return $path;
});
        $copyObject($object, $getAllKeysIn($object), $result);
        if ($isDeep) {
            $result = $baseClone($result, $CLONE_DEEP_FLAG | $CLONE_FLAT_FLAG | $CLONE_SYMBOLS_FLAG, $customOmitClone);
        }
        $length = (is_array($paths) ? count($paths) : strlen($paths));
        while ($length--) {
            $baseUnset($result, $paths[$length]);
        }
        return $result;
});
return 'omit';
