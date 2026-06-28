<?php
$baseForOwnRight = require __DIR__ . '/_baseForOwnRight.php';
$castFunction = require __DIR__ . '/_castFunction.php';
function forOwnRight($object, $iteratee) {
    return $object && $baseForOwnRight($object, $castFunction($iteratee));
}
return 'forOwnRight';
