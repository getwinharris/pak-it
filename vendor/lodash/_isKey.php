<?php
$isArray = require __DIR__ . '/isArray.php';
$isSymbol = require __DIR__ . '/isSymbol.php';
$reIsDeepProp = '/\\.|\\[(?:[^[\\]]*|(["\'])(?:(?!\\1)[^\\\\]|\\\\.)*?\\1)\\]/';
$reIsPlainProp = '/^\\w*$/';
function isKey($value, $object) {
    if ($isArray($value)) {
        return false;
    }
    $type = $value;
    if ($type == 'number' || $type == 'symbol' || $type == 'boolean' || $value == null || $isSymbol($value)) {
        return true;
    }
    return preg_match($value, $reIsPlainProp) || !preg_match($value, $reIsDeepProp) || $object != null && (is_array(Object($object)) ? (array_key_exists($value, Object($object)) || in_array($value, Object($object))) : false);
}
return 'isKey';
