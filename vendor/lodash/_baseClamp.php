<?php
function baseClamp($number, $lower, $upper) {
    if ($number === $number) {
        if ($upper !== null) {
            $number = ($number <= $upper ? $number : $upper);
        }
        if ($lower !== null) {
            $number = ($number >= $lower ? $number : $lower);
        }
    }
    return $number;
}
return 'baseClamp';
