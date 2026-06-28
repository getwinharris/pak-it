<?php
$baseSlice = require __DIR__ . '/_baseSlice.php';
function baseWhile($array, $predicate, $isDrop, $fromRight) {
    $length = (is_array($array) ? count($array) : strlen($array));
    $index = ($fromRight ? $length : -1);
    while (($fromRight ? $index-- : ++$index < $length) && $predicate($array[$index], $index, $array)) {}
    return ($isDrop ? $baseSlice($array, ($fromRight ? 0 : $index), ($fromRight ? $index + 1 : $length)) : $baseSlice($array, ($fromRight ? $index + 1 : 0), ($fromRight ? $length : $index)));
}
return 'baseWhile';
