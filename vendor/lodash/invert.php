<?php
$constant = require __DIR__ . '/constant.php';
$createInverter = require __DIR__ . '/_createInverter.php';
$identity = require __DIR__ . '/identity.php';
$objectProto = Object['prototype'];
$nativeObjectToString = $objectProto['toString'];
$invert = $createInverter(function($result, $value, $key) {
        if ($value != null && !is_callable($value['toString'])) {
            $value = call_user_func($nativeObjectToString, $value);
        }
        $result[$value] = $key;
}, $constant($identity));
return 'invert';
