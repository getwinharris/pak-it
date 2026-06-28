<?php
$copyArray = require __DIR__ . '/_copyArray.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$nativeMin = min;
function reorder($array, $indexes) {
    $arrLength = (is_array($array) ? count($array) : strlen($array));
    $length = $nativeMin((is_array($indexes) ? count($indexes) : strlen($indexes)), $arrLength);
    $oldArray = $copyArray($array);
    while ($length--) {
        $index = $indexes[$length];
        $array[$length] = ($isIndex($index, $arrLength) ? $oldArray[$index] : null);
    }
    return $array;
}
return 'reorder';
