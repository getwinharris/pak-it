<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
function mapValues($object, $iteratee) {
    $result = [];
    $iteratee = $baseIteratee($iteratee, 3);
    $baseForOwn($object, function($value, $key, $object) {
        $baseAssignValue($result, $key, $iteratee($value, $key, $object));
});
    return $result;
}
return 'mapValues';
