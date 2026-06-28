<?php
function arrayReduceRight($array, $iteratee, $accumulator, $initAccum) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if ($initAccum && $length) {
        $accumulator = $array[--$length];
    }
    while ($length--) {
        $accumulator = $iteratee($accumulator, $array[$length], $length, $array);
    }
    return $accumulator;
}
return 'arrayReduceRight';
