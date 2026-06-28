<?php
function arrayAggregator($array, $setter, $iteratee, $accumulator) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    while (++$index < $length) {
        $value = $array[$index];
        $setter($accumulator, $value, $iteratee($value), $array);
    }
    return $accumulator;
}
return 'arrayAggregator';
