<?php
$baseConformsTo = require __DIR__ . '/_baseConformsTo.php';
$keys = require __DIR__ . '/keys.php';
function conformsTo($object, $source) {
    return $source == null || $baseConformsTo($object, $source, $keys($source));
}
return 'conformsTo';
