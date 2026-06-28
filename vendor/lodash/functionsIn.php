<?php
$baseFunctions = require __DIR__ . '/_baseFunctions.php';
$keysIn = require __DIR__ . '/keysIn.php';
function functionsIn($object) {
    return ($object == null ? [] : $baseFunctions($object, $keysIn($object)));
}
return 'functionsIn';
