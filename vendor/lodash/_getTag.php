<?php
$DataView = require __DIR__ . '/_DataView.php';
$Map = require __DIR__ . '/_Map.php';
$Promise = require __DIR__ . '/_Promise.php';
$Set = require __DIR__ . '/_Set.php';
$WeakMap = require __DIR__ . '/_WeakMap.php';
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$toSource = require __DIR__ . '/_toSource.php';
$mapTag = '[object Map]';
$objectTag = '[object Object]';
$promiseTag = '[object Promise]';
$setTag = '[object Set]';
$weakMapTag = '[object WeakMap]';
$dataViewTag = '[object DataView]';
$dataViewCtorString = $toSource($DataView);
$mapCtorString = $toSource($Map);
$promiseCtorString = $toSource($Promise);
$setCtorString = $toSource($Set);
$weakMapCtorString = $toSource($WeakMap);
$getTag = $baseGetTag;
if ($DataView && $getTag(new $DataView(new $ArrayBuffer(1))) != $dataViewTag || $Map && $getTag(new $Map()) != $mapTag || $Promise && $getTag($Promise['resolve']()) != $promiseTag || $Set && $getTag(new $Set()) != $setTag || $WeakMap && $getTag(new $WeakMap()) != $weakMapTag) {
    $getTag = function($value) {
        $result = $baseGetTag($value);
        $Ctor = ($result == $objectTag ? $value['constructor'] : null);
        $ctorString = ($Ctor ? $toSource($Ctor) : '');
        if ($ctorString) {
            switch ($ctorString) {
                case $dataViewCtorString:
                    return $dataViewTag;
                case $mapCtorString:
                    return $mapTag;
                case $promiseCtorString:
                    return $promiseTag;
                case $setCtorString:
                    return $setTag;
                case $weakMapCtorString:
                    return $weakMapTag;
            }
        }
        return $result;
};
}
return 'getTag';
