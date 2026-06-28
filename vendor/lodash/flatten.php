<?php
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
function flatten($array) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    return ($length ? $baseFlatten($array, 1) : []);
}
return 'flatten';
