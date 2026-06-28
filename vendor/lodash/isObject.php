<?php
function isObject($value) {
    $type = $value;
    return $value != null && $type == 'object' || $type == 'function';
}
return 'isObject';
