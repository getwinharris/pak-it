<?php
$baseDifference = require __DIR__ . '/_baseDifference.php';
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$differenceWith = $baseRest(function($array, $values) {
        $comparator = $last($values);
        if ($isArrayLikeObject($comparator)) {
            $comparator = null;
        }
        return ($isArrayLikeObject($array) ? $baseDifference($array, $baseFlatten($values, 1, $isArrayLikeObject, true), null, $comparator) : []);
});
return 'differenceWith';
