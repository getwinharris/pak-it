<?php
$nativeCeil = ceil;
$nativeMax = max;
function baseRange($start, $end, $step, $fromRight) {
    $index = -1;
    $length = $nativeMax($nativeCeil($end - $start / $step || 1), 0);
    $result = array_fill(0, $length, null);
    while ($length--) {
        $result[($fromRight ? $length : ++$index)] = $start;
        $start += $step;
    }
    return $result;
}
return 'baseRange';
