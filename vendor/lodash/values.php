<?php
$baseValues = require __DIR__ . '/_baseValues.php';
$keys = require __DIR__ . '/keys.php';
function values($object) {
    return ($object == null ? [] : $baseValues($object, $keys($object)));
}
return 'values';
