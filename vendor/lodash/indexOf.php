<?php
$baseIndexOf = require __DIR__ . '/_baseIndexOf.php';
$toInteger = require __DIR__ . '/toInteger.php';
$nativeMax = max;
function indexOf($array, $value, $fromIndex) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return -1;
    }
    $index = ($fromIndex == null ? 0 : $toInteger($fromIndex));
    if ($index < 0) {
        $index = $nativeMax($length + $index, 0);
    }
    return $baseIndexOf($array, $value, $index);
}
return 'indexOf';
