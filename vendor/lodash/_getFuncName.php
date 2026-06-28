<?php
$realNames = require __DIR__ . '/_realNames.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function getFuncName($func) {
    $result = $func['name'] + '';
    $array = $realNames[$result];
    $length = (call_user_func($hasOwnProperty, $realNames, $result) ? (is_array($array) ? count($array) : strlen($array)) : 0);
    while ($length--) {
        $data = $array[$length];
        $otherFunc = $data['func'];
        if ($otherFunc == null || $otherFunc == $func) {
            return $data['name'];
        }
    }
    return $result;
}
return 'getFuncName';
