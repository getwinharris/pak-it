<?php
$baseSlice = require __DIR__ . '/_baseSlice.php';
$toInteger = require __DIR__ . '/toInteger.php';
function takeRight($array, $n, $guard) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return [];
    }
    $n = ($guard || $n === null ? 1 : $toInteger($n));
    $n = $length - $n;
    return $baseSlice($array, ($n < 0 ? 0 : $n), $length);
}
return 'takeRight';
