<?php
$arraySome = require __DIR__ . '/_arraySome.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseSome = require __DIR__ . '/_baseSome.php';
$isArray = require __DIR__ . '/isArray.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
function some($collection, $predicate, $guard) {
    $func = ($isArray($collection) ? $arraySome : $baseSome);
    if ($guard && $isIterateeCall($collection, $predicate, $guard)) {
        $predicate = null;
    }
    return $func($collection, $baseIteratee($predicate, 3));
}
return 'some';
