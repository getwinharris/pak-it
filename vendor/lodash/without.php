<?php
$baseDifference = require __DIR__ . '/_baseDifference.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isArrayLikeObject = require __DIR__ . '/isArrayLikeObject.php';
$without = $baseRest(function($array, $values) {
        return ($isArrayLikeObject($array) ? $baseDifference($array, $values) : []);
});
return 'without';
