<?php
$baseProperty = require __DIR__ . '/_baseProperty.php';
$basePropertyDeep = require __DIR__ . '/_basePropertyDeep.php';
$isKey = require __DIR__ . '/_isKey.php';
$toKey = require __DIR__ . '/_toKey.php';
function property($path) {
    return ($isKey($path) ? $baseProperty($toKey($path)) : $basePropertyDeep($path));
}
return 'property';
