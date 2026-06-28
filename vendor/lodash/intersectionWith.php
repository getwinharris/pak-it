<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIntersection = require __DIR__ . '/_baseIntersection.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$castArrayLikeObject = require __DIR__ . '/_castArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$intersectionWith = $baseRest(function($arrays) {
        $comparator = $last($arrays);
        $mapped = $arrayMap($arrays, $castArrayLikeObject);
        $comparator = (is_callable($comparator) ? $comparator : null);
        if ($comparator) {
            array_pop($mapped);
        }
        return ((is_array($mapped) ? count($mapped) : strlen($mapped)) && $mapped[0] === $arrays[0] ? $baseIntersection($mapped, null, $comparator) : []);
});
return 'intersectionWith';
