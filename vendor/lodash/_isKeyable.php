<?php
function isKeyable($value) {
    $type = $value;
    return ($type == 'string' || $type == 'number' || $type == 'symbol' || $type == 'boolean' ? $value !== '__proto__' : $value === null);
}
return 'isKeyable';
