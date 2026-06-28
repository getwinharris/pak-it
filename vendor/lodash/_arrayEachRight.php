<?php
function arrayEachRight($array, $iteratee) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    while ($length--) {
        if ($iteratee($array[$length], $length, $array) === false) {
            break;
        }
    }
    return $array;
}
return 'arrayEachRight';
