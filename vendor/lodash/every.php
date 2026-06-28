<?php
$arrayEvery = require __DIR__ . '/_arrayEvery.php';
$baseEvery = require __DIR__ . '/_baseEvery.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$isArray = require __DIR__ . '/isArray.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
function every($collection, $predicate, $guard) {
    $func = ($isArray($collection) ? $arrayEvery : $baseEvery);
    if ($guard && $isIterateeCall($collection, $predicate, $guard)) {
        $predicate = null;
    }
    return $func($collection, $baseIteratee($predicate, 3));
}
return 'every';
