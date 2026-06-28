<?php
$baseFill = require __DIR__ . '/_baseFill.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
function fill($array, $value, $start, $end) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return [];
    }
    if ($start && !is_numeric($start) && $isIterateeCall($array, $value, $start)) {
        $start = 0;
        $end = $length;
    }
    return $baseFill($array, $value, $start, $end);
}
return 'fill';
