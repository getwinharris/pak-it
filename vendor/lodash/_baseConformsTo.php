<?php
function baseConformsTo($object, $source, $props) {
    $length = (is_array($props) ? count($props) : strlen($props));
    if ($object == null) {
        return !$length;
    }
    $object = Object($object);
    while ($length--) {
        $key = $props[$length];
        $predicate = $source[$key];
        $value = $object[$key];
        if ($value === null && !(is_array($object) ? (array_key_exists($key, $object) || in_array($key, $object)) : false) || !$predicate($value)) {
            return false;
        }
    }
    return true;
}
return 'baseConformsTo';
