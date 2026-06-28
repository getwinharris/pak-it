<?php
$nativeMax = max;
$nativeMin = min;
function baseInRange($number, $start, $end) {
    return $number >= $nativeMin($start, $end) && $number < $nativeMax($start, $end);
}
return 'baseInRange';
