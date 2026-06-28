<?php
function baseSlice($array, $start, $end) {
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    if ($start < 0) {
        $start = (-$start > $length ? 0 : $length + $start);
    }
    $end = ($end > $length ? $length : $end);
    if ($end < 0) {
        $end += $length;
    }
    $length = ($start > $end ? 0 : $end - $start >> 0);
    $start >>= 0;
    $result = array_fill(0, $length, null);
    while (++$index < $length) {
        $result[$index] = $array[$index + $start];
    }
    return $result;
}
return 'baseSlice';
