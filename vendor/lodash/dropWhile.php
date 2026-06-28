<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseWhile = require __DIR__ . '/_baseWhile.php';
function dropWhile($array, $predicate) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseWhile($array, $baseIteratee($predicate, 3), true) : []);
}
return 'dropWhile';
