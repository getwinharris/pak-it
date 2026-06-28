<?php
function safeGet($object, $key) {
    if ($key === 'constructor' && is_callable($object[$key])) {
        return;
    }
    if ($key == '__proto__') {
        return;
    }
    return $object[$key];
}
return 'safeGet';
