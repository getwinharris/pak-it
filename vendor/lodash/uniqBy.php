<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseUniq = require __DIR__ . '/_baseUniq.php';
function uniqBy($array, $iteratee) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseUniq($array, $baseIteratee($iteratee, 2)) : []);
}
return 'uniqBy';
