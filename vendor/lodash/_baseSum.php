<?php
function baseSum($array, $iteratee) {
    $result = null;
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    while (++$index < $length) {
        $current = $iteratee($array[$index]);
        if ($current !== null) {
            $result = ($result === null ? $current : $result + $current);
        }
    }
    return $result;
}
return 'baseSum';
