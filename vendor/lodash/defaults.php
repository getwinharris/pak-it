<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$eq = require __DIR__ . '/eq.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$keysIn = require __DIR__ . '/keysIn.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$defaults = $baseRest(function($object, $sources) {
        $object = Object($object);
        $index = -1;
        $length = (is_array($sources) ? count($sources) : strlen($sources));
        $guard = ($length > 2 ? $sources[2] : null);
        if ($guard && $isIterateeCall($sources[0], $sources[1], $guard)) {
            $length = 1;
        }
        while (++$index < $length) {
            $source = $sources[$index];
            $props = $keysIn($source);
            $propsIndex = -1;
            $propsLength = (is_array($props) ? count($props) : strlen($props));
            while (++$propsIndex < $propsLength) {
                $key = $props[$propsIndex];
                $value = $object[$key];
                if ($value === null || $eq($value, $objectProto[$key]) && !call_user_func($hasOwnProperty, $object, $key)) {
                    $object[$key] = $source[$key];
                }
            }
        }
        return $object;
});
return 'defaults';
