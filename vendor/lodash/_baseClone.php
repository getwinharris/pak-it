<?php
$Stack = require __DIR__ . '/_Stack.php';
$arrayEach = require __DIR__ . '/_arrayEach.php';
$assignValue = require __DIR__ . '/_assignValue.php';
$baseAssign = require __DIR__ . '/_baseAssign.php';
$baseAssignIn = require __DIR__ . '/_baseAssignIn.php';
$cloneBuffer = require __DIR__ . '/_cloneBuffer.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$copySymbols = require __DIR__ . '/_copySymbols.php';
$copySymbolsIn = require __DIR__ . '/_copySymbolsIn.php';
$getAllKeys = require __DIR__ . '/_getAllKeys.php';
$getAllKeysIn = require __DIR__ . '/_getAllKeysIn.php';
$getTag = require __DIR__ . '/_getTag.php';
$initCloneArray = require __DIR__ . '/_initCloneArray.php';
$initCloneByTag = require __DIR__ . '/_initCloneByTag.php';
$initCloneObject = require __DIR__ . '/_initCloneObject.php';
$isArray = require __DIR__ . '/isArray.php';
$isBuffer = require __DIR__ . '/isBuffer.php';
$isMap = require __DIR__ . '/isMap.php';
$isObject = require __DIR__ . '/isObject.php';
$isSet = require __DIR__ . '/isSet.php';
$keys = require __DIR__ . '/keys.php';
$keysIn = require __DIR__ . '/keysIn.php';
$CLONE_DEEP_FLAG = 1;
$CLONE_FLAT_FLAG = 2;
$CLONE_SYMBOLS_FLAG = 4;
$argsTag = '[object Arguments]';
$arrayTag = '[object Array]';
$boolTag = '[object Boolean]';
$dateTag = '[object Date]';
$errorTag = '[object Error]';
$funcTag = '[object Function]';
$genTag = '[object GeneratorFunction]';
$mapTag = '[object Map]';
$numberTag = '[object Number]';
$objectTag = '[object Object]';
$regexpTag = '[object RegExp]';
$setTag = '[object Set]';
$stringTag = '[object String]';
$symbolTag = '[object Symbol]';
$weakMapTag = '[object WeakMap]';
$arrayBufferTag = '[object ArrayBuffer]';
$dataViewTag = '[object DataView]';
$float32Tag = '[object Float32Array]';
$float64Tag = '[object Float64Array]';
$int8Tag = '[object Int8Array]';
$int16Tag = '[object Int16Array]';
$int32Tag = '[object Int32Array]';
$uint8Tag = '[object Uint8Array]';
$uint8ClampedTag = '[object Uint8ClampedArray]';
$uint16Tag = '[object Uint16Array]';
$uint32Tag = '[object Uint32Array]';
$cloneableTags = [];
$cloneableTags[$argsTag] = $cloneableTags[$arrayTag] = $cloneableTags[$arrayBufferTag] = $cloneableTags[$dataViewTag] = $cloneableTags[$boolTag] = $cloneableTags[$dateTag] = $cloneableTags[$float32Tag] = $cloneableTags[$float64Tag] = $cloneableTags[$int8Tag] = $cloneableTags[$int16Tag] = $cloneableTags[$int32Tag] = $cloneableTags[$mapTag] = $cloneableTags[$numberTag] = $cloneableTags[$objectTag] = $cloneableTags[$regexpTag] = $cloneableTags[$setTag] = $cloneableTags[$stringTag] = $cloneableTags[$symbolTag] = $cloneableTags[$uint8Tag] = $cloneableTags[$uint8ClampedTag] = $cloneableTags[$uint16Tag] = $cloneableTags[$uint32Tag] = true;
$cloneableTags[$errorTag] = $cloneableTags[$funcTag] = $cloneableTags[$weakMapTag] = false;
function baseClone($value, $bitmask, $customizer, $key, $object, $stack) {
    $result = null;
    $isDeep = $bitmask & $CLONE_DEEP_FLAG;
    $isFlat = $bitmask & $CLONE_FLAT_FLAG;
    $isFull = $bitmask & $CLONE_SYMBOLS_FLAG;
    if ($customizer) {
        $result = ($object ? $customizer($value, $key, $object, $stack) : $customizer($value));
    }
    if ($result !== null) {
        return $result;
    }
    if (!$isObject($value)) {
        return $value;
    }
    $isArr = $isArray($value);
    if ($isArr) {
        $result = $initCloneArray($value);
        if (!$isDeep) {
            return $copyArray($value, $result);
        }
    } else {
        $tag = $getTag($value);
        $isFunc = $tag == $funcTag || $tag == $genTag;
        if ($isBuffer($value)) {
            return $cloneBuffer($value, $isDeep);
        }
        if ($tag == $objectTag || $tag == $argsTag || $isFunc && !$object) {
            $result = ($isFlat || $isFunc ? [] : $initCloneObject($value));
            if (!$isDeep) {
                return ($isFlat ? $copySymbolsIn($value, $baseAssignIn($result, $value)) : $copySymbols($value, $baseAssign($result, $value)));
            }
        } else {
            if (!$cloneableTags[$tag]) {
                return ($object ? $value : []);
            }
            $result = $initCloneByTag($value, $tag, $isDeep);
        }
    }
    $stack || $stack = new $Stack();
    $stacked = $stack['get']($value);
    if ($stacked) {
        return $stacked;
    }
    $stack['set']($value, $result);
    if ($isSet($value)) {
        $value['forEach'](function($subValue) {
        $result['add']($baseClone($subValue, $bitmask, $customizer, $subValue, $value, $stack));
});
    } else if ($isMap($value)) {
        $value['forEach'](function($subValue, $key) {
        $result['set']($key, $baseClone($subValue, $bitmask, $customizer, $key, $value, $stack));
});
    }
    $keysFunc = ($isFull ? ($isFlat ? $getAllKeysIn : $getAllKeys) : ($isFlat ? $keysIn : $keys));
    $props = ($isArr ? null : $keysFunc($value));
    $arrayEach($props || $value, function($subValue, $key) {
        if ($props) {
            $key = $subValue;
            $subValue = $value[$key];
        }
        $assignValue($result, $key, $baseClone($subValue, $bitmask, $customizer, $key, $value, $stack));
});
    return $result;
}
return 'baseClone';
