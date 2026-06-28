<?php
$baseRandom = require __DIR__ . '/_baseRandom.php';
function shuffleSelf($array, $size) {
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    $lastIndex = $length - 1;
    $size = ($size === null ? $length : $size);
    while (++$index < $size) {
        $rand = $baseRandom($index, $lastIndex);
        $value = $array[$rand];
        $array[$rand] = $array[$index];
        $array[$index] = $value;
    }
    (is_array($array) ? array_splice($array, 0, $size) : substr($array, 0, $size));
    return $array;
}
return 'shuffleSelf';
