<?php
function arrayEach($array, $iteratee) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    while (++$index < $length) {
        if ($iteratee($array[$index], $index, $array) === false) {
            break;
        }
    }
    return $array;
}
return 'arrayEach';
