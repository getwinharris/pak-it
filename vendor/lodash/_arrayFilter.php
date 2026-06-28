<?php
function arrayFilter($array, $predicate) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    $resIndex = 0;
    $result = [];
    while (++$index < $length) {
        $value = $array[$index];
        if ($predicate($value, $index, $array)) {
            $result[$resIndex++] = $value;
        }
    }
    return $result;
}
return 'arrayFilter';
