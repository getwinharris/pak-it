<?php
function head($array) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $array[0] : null);
}
return 'head';
