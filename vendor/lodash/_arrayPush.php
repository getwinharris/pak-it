<?php
function arrayPush($array, $values) {
    $index = -1;
    $length = (is_array($values) ? count($values) : strlen($values));
    $offset = (is_array($array) ? count($array) : strlen($array));
    while (++$index < $length) {
        $array[$offset + $index] = $values[$index];
    }
    return $array;
}
return 'arrayPush';
