<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$toInteger = require __DIR__ . '/toInteger.php';
function flattenDepth($array, $depth) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if (!$length) {
        return [];
    }
    $depth = ($depth === null ? 1 : $toInteger($depth));
    return $baseFlatten($array, $depth);
}
return 'flattenDepth';
