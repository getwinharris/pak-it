<?php
$baseExtremum = require __DIR__ . '/_baseExtremum.php';
$baseLt = require __DIR__ . '/_baseLt.php';
$identity = require __DIR__ . '/identity.php';
function _min($array) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $identity, $baseLt) : null);
}
return '_min';
