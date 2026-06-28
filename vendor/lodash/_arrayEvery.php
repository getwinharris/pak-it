<?php
function arrayEvery($array, $predicate) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    while (++$index < $length) {
        if (!$predicate($array[$index], $index, $array)) {
            return false;
        }
    }
    return true;
}
return 'arrayEvery';
