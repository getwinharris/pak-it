<?php
$baseSlice = require __DIR__ . '/_baseSlice.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$toInteger = require __DIR__ . '/toInteger.php';
function slice($array, $start, $end) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return [];
    }
    if ($end && !is_numeric($end) && $isIterateeCall($array, $start, $end)) {
        $start = 0;
        $end = $length;
    } else {
        $start = ($start == null ? 0 : $toInteger($start));
        $end = ($end === null ? $length : $toInteger($end));
    }
    return $baseSlice($array, $start, $end);
}
return 'slice';
