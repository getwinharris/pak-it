<?php
function strictIndexOf($array, $value, $fromIndex) {
    $index = $fromIndex - 1;
    $length = (is_array($array) ? count($array) : strlen($array));
    while (++$index < $length) {
        if ($array[$index] === $value) {
            return $index;
        }
    }
    return -1;
}
return 'strictIndexOf';
