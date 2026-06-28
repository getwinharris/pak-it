<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseMean = require __DIR__ . '/_baseMean.php';
function meanBy($array, $iteratee) {
    return $baseMean($array, $baseIteratee($iteratee, 2));
}
return 'meanBy';
