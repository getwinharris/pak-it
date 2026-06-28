<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseUniq = require __DIR__ . '/_baseUniq.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$unionWith = $baseRest(function($arrays) {
        $comparator = $last($arrays);
        $comparator = (is_callable($comparator) ? $comparator : null);
        return $baseUniq($baseFlatten($arrays, 1, $isArrayLikeObject, true), null, $comparator);
});
return 'unionWith';
