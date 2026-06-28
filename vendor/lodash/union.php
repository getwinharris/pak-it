<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseUniq = require __DIR__ . '/_baseUniq.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$union = $baseRest(function($arrays) {
        return $baseUniq($baseFlatten($arrays, 1, $isArrayLikeObject, true));
});
return 'union';
