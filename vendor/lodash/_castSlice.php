<?php
$baseSlice = require __DIR__ . '/_baseSlice.php';
function castSlice($array, $start, $end) {
    $length = (is_array($array) ? count($array) : strlen($array));
    $end = ($end === null ? $length : $end);
    return (!$start && $end >= $length ? $array : $baseSlice($array, $start, $end));
}
return 'castSlice';
