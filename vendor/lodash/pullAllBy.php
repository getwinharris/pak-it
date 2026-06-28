<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$basePullAll = require __DIR__ . '/_basePullAll.php';
function pullAllBy($array, $values, $iteratee) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) && $values && (is_array($values) ? count($values) : strlen($values)) ? $basePullAll($array, $values, $baseIteratee($iteratee, 2)) : $array);
}
return 'pullAllBy';
