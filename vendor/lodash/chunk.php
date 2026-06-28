<?php
$baseSlice = require __DIR__ . '/_baseSlice.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$toInteger = require __DIR__ . '/toInteger.php';
$nativeCeil = ceil;
$nativeMax = max;
function chunk($array, $size, $guard) {
    if (($guard ? $isIterateeCall($array, $size, $guard) : $size === null)) {
        $size = 1;
    } else {
        $size = $nativeMax($toInteger($size), 0);
    }
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length || $size < 1) {
        return [];
    }
    $index = 0;
    $resIndex = 0;
    $result = array_fill(0, $nativeCeil($length / $size), null);
    while ($index < $length) {
        $result[$resIndex++] = $baseSlice($array, $index, $index += $size);
    }
    return $result;
}
return 'chunk';
