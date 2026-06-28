<?php
$baseValues = require __DIR__ . '/_baseValues.php';
$keysIn = require __DIR__ . '/keysIn.php';
function valuesIn($object) {
    return ($object == null ? [] : $baseValues($object, $keysIn($object)));
}
return 'valuesIn';
