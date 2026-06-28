<?php
function getValue($object, $key) {
    return ($object == null ? null : $object[$key]);
}
return 'getValue';
