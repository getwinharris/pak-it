<?php
$baseExtremum = require __DIR__ . '/_baseExtremum.php';
$baseGt = require __DIR__ . '/_baseGt.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
function maxBy($array, $iteratee) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $baseIteratee($iteratee, 2), $baseGt) : null);
}
return 'maxBy';
