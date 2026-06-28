<?php
function arrayIncludesWith($array, $value, $comparator) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    while (++$index < $length) {
        if ($comparator($value, $array[$index])) {
            return true;
        }
    }
    return false;
}
return 'arrayIncludesWith';
