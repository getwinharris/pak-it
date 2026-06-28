<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseUniq = require __DIR__ . '/_baseUniq.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$unionBy = $baseRest(function($arrays) {
        $iteratee = $last($arrays);
        if ($isArrayLikeObject($iteratee)) {
            $iteratee = null;
        }
        return $baseUniq($baseFlatten($arrays, 1, $isArrayLikeObject, true), $baseIteratee($iteratee, 2));
});
return 'unionBy';
