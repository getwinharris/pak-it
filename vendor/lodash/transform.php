<?php
$arrayEach = require __DIR__ . '/_arrayEach.php';
$baseCreate = require __DIR__ . '/_baseCreate.php';
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$getPrototype = require __DIR__ . '/_getPrototype.php';
$isArray = require __DIR__ . '/isArray.php';
$isBuffer = require __DIR__ . '/isBuffer.php';
$isFunction = require __DIR__ . '/isFunction.php';
$isObject = require __DIR__ . '/isObject.php';
$isTypedArray = require __DIR__ . '/isTypedArray.php';
function transform($object, $iteratee, $accumulator) {
    $isArr = $isArray($object);
    $isArrLike = $isArr || $isBuffer($object) || $isTypedArray($object);
    $iteratee = $baseIteratee($iteratee, 4);
    if ($accumulator == null) {
        $Ctor = $object && $object['constructor'];
        if ($isArrLike) {
            $accumulator = ($isArr ? new $Ctor() : []);
        } else if ($isObject($object)) {
            $accumulator = ($isFunction($Ctor) ? $baseCreate($getPrototype($object)) : []);
        } else {
            $accumulator = [];
        }
    }
    ($isArrLike ? $arrayEach : $baseForOwn)($object, function($value, $index, $object) {
        return $iteratee($accumulator, $value, $index, $object);
});
    return $accumulator;
}
return 'transform';
