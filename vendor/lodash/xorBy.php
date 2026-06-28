<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseXor = require __DIR__ . '/_baseXor.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$xorBy = $baseRest(function($arrays) {
        $iteratee = $last($arrays);
        if ($isArrayLikeObject($iteratee)) {
            $iteratee = null;
        }
        return $baseXor($arrayFilter($arrays, $isArrayLikeObject), $baseIteratee($iteratee, 2));
});
return 'xorBy';
