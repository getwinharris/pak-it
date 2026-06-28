<?php
function isObjectLike($value) {
    return $value != null && (is_object($value) || is_array($value));
}
return 'isObjectLike';
