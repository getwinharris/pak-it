<?php
function baseFindIndex($array, $predicate, $fromIndex, $fromRight) {
    $length = (is_array($array) ? count($array) : strlen($array));
    $index = $fromIndex + ($fromRight ? 1 : -1);
    while (($fromRight ? $index-- : ++$index < $length)) {
        if ($predicate($array[$index], $index, $array)) {
            return $index;
        }
    }
    return -1;
}
return 'baseFindIndex';
