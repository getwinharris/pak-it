<?php
$baseExtremum = require __DIR__ . '/_baseExtremum.php';
$baseGt = require __DIR__ . '/_baseGt.php';
$identity = require __DIR__ . '/identity.php';
function _max($array) {
    return ($array && (is_array($array) ? count($array) : strlen($array)) ? $baseExtremum($array, $identity, $baseGt) : null);
}
return '_max';
