<?php
function matchesStrictComparable($key, $srcValue) {
    return function($object) {
        if ($object == null) {
            return false;
        }
        return $object[$key] === $srcValue && $srcValue !== null || (is_array(Object($object)) ? (array_key_exists($key, Object($object)) || in_array($key, Object($object))) : false);
};
}
return 'matchesStrictComparable';
