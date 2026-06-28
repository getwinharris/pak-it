<?php
$baseForOwn = require __DIR__ . '/_baseForOwn.php';
$castFunction = require __DIR__ . '/_castFunction.php';
function forOwn($object, $iteratee) {
    return $object && $baseForOwn($object, $castFunction($iteratee));
}
return 'forOwn';
