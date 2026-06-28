<?php
function arrayReduce($array, $iteratee, $accumulator, $initAccum) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if ($initAccum && $length) {
        $accumulator = $array[++$index];
    }
    while (++$index < $length) {
        $accumulator = $iteratee($accumulator, $array[$index], $index, $array);
    }
    return $accumulator;
}
return 'arrayReduce';
