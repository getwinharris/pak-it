<?php
function baseTimes($n, $iteratee) {
    $index = -1;
    $result = array_fill(0, $n, null);
    while (++$index < $n) {
        $result[$index] = $iteratee($index);
    }
    return $result;
}
return 'baseTimes';
