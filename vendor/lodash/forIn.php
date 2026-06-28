<?php
$baseFor = require __DIR__ . '/_baseFor.php';
$castFunction = require __DIR__ . '/_castFunction.php';
$keysIn = require __DIR__ . '/keysIn.php';
function forIn($object, $iteratee) {
    return ($object == null ? $object : $baseFor($object, $castFunction($iteratee), $keysIn));
}
return 'forIn';
