<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIntersection = require __DIR__ . '/_baseIntersection.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$castArrayLikeObject = require __DIR__ . '/_castArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$intersectionBy = $baseRest(function($arrays) {
        $iteratee = $last($arrays);
        $mapped = $arrayMap($arrays, $castArrayLikeObject);
        if ($iteratee === $last($mapped)) {
            $iteratee = null;
        } else {
            array_pop($mapped);
        }
        return ((is_array($mapped) ? count($mapped) : strlen($mapped)) && $mapped[0] === $arrays[0] ? $baseIntersection($mapped, $baseIteratee($iteratee, 2)) : []);
});
return 'intersectionBy';
