<?php
function _compact($array) {
    $index = -1;
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    $resIndex = 0;
    $result = [];
    while (++$index < $length) {
        $value = $array[$index];
        if ($value) {
            $result[$resIndex++] = $value;
        }
    }
    return $result;
}
return '_compact';
