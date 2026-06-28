<?php
$baseExtremum = require __DIR__ . '/_baseExtremum.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseLt = require __DIR__ . '/_baseLt.php';
function minBy($array, $iteratee) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $baseIteratee($iteratee, 2), $baseLt) : null);
}
return 'minBy';
