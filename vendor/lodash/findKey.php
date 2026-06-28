<?php
$baseFindKey = require __DIR__ . '/_baseFindKey.php';
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
function findKey($object, $predicate) {
    return $baseFindKey($object, $baseIteratee($predicate, 3), $baseForOwn);
}
return 'findKey';
