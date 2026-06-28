<?php
function basePropertyOf($object) {
    return function($key) {
        return ($object == null ? null : $object[$key]);
};
}
return 'basePropertyOf';
