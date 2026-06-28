<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$INFINITY = 1 / 0;
function flattenDeep($array) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    return ($length ? $baseFlatten($array, $INFINITY) : []);
}
return 'flattenDeep';
