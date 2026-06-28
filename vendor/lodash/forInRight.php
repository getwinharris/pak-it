<?php
$baseForRight = require __DIR__ . '/_baseForRight.php';
$castFunction = require __DIR__ . '/_castFunction.php';
$keysIn = require __DIR__ . '/keysIn.php';
function forInRight($object, $iteratee) {
    return ($object == null ? $object : $baseForRight($object, $castFunction($iteratee), $keysIn));
}
return 'forInRight';
