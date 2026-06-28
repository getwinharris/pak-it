<?php
function baseSortBy($array, $comparer) {
    $length = (is_array($array) ? count($array) : strlen($array));
    sort($comparer, $array);
    while ($length--) {
        $array[$length] = $array[$length]['value'];
    }
    return $array;
}
return 'baseSortBy';
