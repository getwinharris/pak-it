<?php
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function initCloneArray($array) {
    $length = (is_array($array) ? count($array) : strlen($array));
    $result = new $array['constructor']($length);
    if ($length && is_string($array[0]) && call_user_func($hasOwnProperty, $array, 'index')) {
        $result['index'] = $array['index'];
        $result['input'] = $array['input'];
    }
    return $result;
}
return 'initCloneArray';
