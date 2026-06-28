<?php
function copyArray($source, $array) {
    $index = -1;
    $length = (is_array($source) ? count($source) : strlen($source));
    $array || $array = array_fill(0, $length, null);
    while (++$index < $length) {
        $array[$index] = $source[$index];
    }
    return $array;
}
return 'copyArray';
