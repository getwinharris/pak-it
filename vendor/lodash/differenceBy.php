<?php
$baseDifference = require __DIR__ . '/_baseDifference.php';
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$differenceBy = $baseRest(function($array, $values) {
        $iteratee = $last($values);
        if ($isArrayLikeObject($iteratee)) {
            $iteratee = null;
        }
        return ($isArrayLikeObject($array) ? $baseDifference($array, $baseFlatten($values, 1, $isArrayLikeObject, true), $baseIteratee($iteratee, 2)) : []);
});
return 'differenceBy';
