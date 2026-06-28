<?php
$baseDifference = require __DIR__ . '/_baseDifference.php';
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$difference = $baseRest(function($array, $values) {
        return ($isArrayLikeObject($array) ? $baseDifference($array, $baseFlatten($values, 1, $isArrayLikeObject, true)) : []);
});
return 'difference';
