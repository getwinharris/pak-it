<?php
function baseProperty($key) {
    return function($object) {
        return ($object == null ? null : $object[$key]);
};
}
return 'baseProperty';
