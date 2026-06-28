<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$createInverter = require __DIR__ . '/_createInverter.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$nativeObjectToString = $objectProto['toString'];
$invertBy = $createInverter(function($result, $value, $key) {
        if ($value != null && !is_callable($value['toString'])) {
            $value = call_user_func($nativeObjectToString, $value);
        }
        if (call_user_func($hasOwnProperty, $result, $value)) {
            $result[$value][] = $key;
        } else {
            $result[$value] = [$key];
        }
}, $baseIteratee);
return 'invertBy';
