<?php
function arrayMap($array, $iteratee) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    $result = array_fill(0, $length, null);
    while (++$index < $length) {
        $result[$index] = $iteratee($array[$index], $index, $array);
    }
    return $result;
}
return 'arrayMap';
