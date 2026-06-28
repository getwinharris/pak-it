<?php
$baseFor = require __DIR__ . '/_baseFor.php';
$keys = require __DIR__ . '/keys.php';
function baseForOwn($object, $iteratee) {
    return $object && $baseFor($object, $iteratee, $keys);
}
return 'baseForOwn';
