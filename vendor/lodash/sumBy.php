<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseSum = require __DIR__ . '/_baseSum.php';
function sumBy($array, $iteratee) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSum($array, $baseIteratee($iteratee, 2)) : 0);
}
return 'sumBy';
