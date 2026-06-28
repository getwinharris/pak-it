<?php
$arrayFilter = require __DIR__ . '/_arrayFilter.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseXor = require __DIR__ . '/_baseXor.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$xor = $baseRest(function($arrays) {
        return $baseXor($arrayFilter($arrays, $isArrayLikeObject));
});
return 'xor';
