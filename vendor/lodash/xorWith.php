<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseXor = require __DIR__ . '/_baseXor.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$last = require __DIR__ . '/last.php';
$xorWith = $baseRest(function($arrays) {
        $comparator = $last($arrays);
        $comparator = (is_callable($comparator) ? $comparator : null);
        return $baseXor($arrayFilter($arrays, $isArrayLikeObject), null, $comparator);
});
return 'xorWith';
