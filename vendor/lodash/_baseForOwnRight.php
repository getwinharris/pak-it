<?php
$baseForRight = require __DIR__ . '/_baseForRight.php';
$keys = require __DIR__ . '/keys.php';
function baseForOwnRight($object, $iteratee) {
    return $object && $baseForRight($object, $iteratee, $keys);
}
return 'baseForOwnRight';
