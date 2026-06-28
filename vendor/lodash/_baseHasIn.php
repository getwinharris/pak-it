<?php
function baseHasIn($object, $key) {
    return $object != null && (is_array(Object($object)) ? (array_key_exists($key, Object($object)) || in_array($key, Object($object))) : false);
}
return 'baseHasIn';
