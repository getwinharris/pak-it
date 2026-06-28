<?php
$assignValue = require __DIR__ . '/_assignValue.php';
$copyObject = require __DIR__ . '/_copyObject.php';
$createAssigner = require __DIR__ . '/_createAssigner.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isPrototype = require __DIR__ . '/_isPrototype.php';
$keys = require __DIR__ . '/keys.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$assign = $createAssigner(function($object, $source) {
        if ($isPrototype($source) || $isArrayLike($source)) {
            $copyObject($source, $keys($source), $object);
            return;
        }
        foreach ($source as $key => $__value__) {
            if (call_user_func($hasOwnProperty, $source, $key)) {
                $assignValue($object, $key, $source[$key]);
            }
        }
});
return 'assign';
