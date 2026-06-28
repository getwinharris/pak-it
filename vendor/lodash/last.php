<?php
function last($array) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    return ($length ? $array[$length - 1] : null);
}
return 'last';
