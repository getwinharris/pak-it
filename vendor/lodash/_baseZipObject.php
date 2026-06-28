<?php
function baseZipObject($props, $values, $assignFunc) {
    $index = -1;
    $length = (is_array($props) ? count($props) : strlen($props));
    $valsLength = (is_array($values) ? count($values) : strlen($values));
    $result = [];
    while (++$index < $length) {
        $value = ($index < $valsLength ? $values[$index] : null);
        $assignFunc($result, $props[$index], $value);
    }
    return $result;
}
return 'baseZipObject';
