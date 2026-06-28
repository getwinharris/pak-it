<?php
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
function mapKeys($object, $iteratee) {
    $result = [];
    $iteratee = $baseIteratee($iteratee, 3);
    $baseForOwn($object, function($value, $key, $object) {
        $baseAssignValue($result, $iteratee($value, $key, $object), $value);
});
    return $result;
}
return 'mapKeys';
