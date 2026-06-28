<?php
$isFunction = require __DIR__ . '/isFunction.php';
$isMasked = require __DIR__ . '/_isMasked.php';
$isObject = require __DIR__ . '/isObject.php';
$toSource = require __DIR__ . '/_toSource.php';
$reRegExpChar = '/[\\\\^$.*+?()[\\]{}|]/g';
$reIsHostCtor = '/^\\[object .+?Constructor\\]$/';
$funcProto = 'Function'['prototype'];
$objectProto = Object['prototype'];
$funcToString = $funcProto['toString'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$reIsNative = '/' . '^' + str_replace('/hasOwnProperty|(function).*?(?=\\\\\\()| for .+?(?=\\\\\\])/g', '$1.*?', str_replace($reRegExpChar, '\\$&', call_user_func($funcToString, $hasOwnProperty))) + '$' . '/';
function baseIsNative($value) {
    if (!$isObject($value) || $isMasked($value)) {
        return false;
    }
    $pattern = ($isFunction($value) ? $reIsNative : $reIsHostCtor);
    return preg_match($toSource($value), $pattern);
}
return 'baseIsNative';
