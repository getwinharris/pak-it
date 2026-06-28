<?php
$baseNth = require __DIR__ . '/_baseNth.php';
$toInteger = require __DIR__ . '/toInteger.php';
function nth($array, $n) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseNth($array, $toInteger($n)) : null);
}
return 'nth';
