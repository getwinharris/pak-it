<?php
$baseSum = require __DIR__ . '/_baseSum.php';
$identity = require __DIR__ . '/identity.php';
function sum($array) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseSum($array, $identity) : 0);
}
return 'sum';
