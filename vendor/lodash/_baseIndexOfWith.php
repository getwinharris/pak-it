<?php
function baseIndexOfWith($array, $value, $fromIndex, $comparator) {
    $index = $fromIndex - 1;
    $length = (is_array($array) ? count($array) : strlen($array));
    while (++$index < $length) {
        if ($comparator($array[$index], $value)) {
            return $index;
        }
    }
    return -1;
}
return 'baseIndexOfWith';
