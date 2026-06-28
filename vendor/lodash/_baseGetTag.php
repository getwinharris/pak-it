<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$getRawTag = require __DIR__ . '/_getRawTag.php';
$objectToString = require __DIR__ . '/_objectToString.php';
$nullTag = '[object Null]';
$undefinedTag = '[object Undefined]';
$symToStringTag = ($Symbol ? $Symbol['toStringTag'] : null);
function baseGetTag($value) {
    if ($value == null) {
        return ($value === null ? $undefinedTag : $nullTag);
    }
    return ($symToStringTag && (is_array(Object($value)) ? (array_key_exists($symToStringTag, Object($value)) || in_array($symToStringTag, Object($value))) : false) ? $getRawTag($value) : $objectToString($value));
}
return 'baseGetTag';
