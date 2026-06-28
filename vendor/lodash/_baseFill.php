<?php
$toInteger = require __DIR__ . '/toInteger.php';
$toLength = require __DIR__ . '/toLength.php';
function baseFill($array, $value, $start, $end) {
    $length = (is_array($array) ? count($array) : strlen($array));
    $start = $toInteger($start);
    if ($start < 0) {
        $start = (-$start > $length ? 0 : $length + $start);
    }
    $end = ($end === null || $end > $length ? $length : $toInteger($end));
    if ($end < 0) {
        $end += $length;
    }
    $end = ($start > $end ? 0 : $toLength($end));
    while ($start < $end) {
        $array[$start++] = $value;
    }
    return $array;
}
return 'baseFill';
