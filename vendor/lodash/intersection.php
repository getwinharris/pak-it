<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseIntersection = require __DIR__ . '/_baseIntersection.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$castArrayLikeObject = require __DIR__ . '/_castArrayLikeObject.php';
$intersection = $baseRest(function($arrays) {
        $mapped = $arrayMap($arrays, $castArrayLikeObject);
        return ((is_array($mapped) ? count($mapped) : strlen($mapped)) && $mapped[0] === $arrays[0] ? $baseIntersection($mapped) : []);
});
return 'intersection';
