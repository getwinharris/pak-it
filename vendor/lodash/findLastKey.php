<?php
$baseFindKey = require __DIR__ . '/_baseFindKey.php';
$baseForOwnRight = require __DIR__ . '/_baseForOwnRight.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
function findLastKey($object, $predicate) {
    return $baseFindKey($object, $baseIteratee($predicate, 3), $baseForOwnRight);
}
return 'findLastKey';
