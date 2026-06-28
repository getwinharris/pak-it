<?php
$flatten = require __DIR__ . '/flatten.php';
$overRest = require __DIR__ . '/_overRest.php';
$setToString = require __DIR__ . '/_setToString.php';
function flatRest($func) {
    return $setToString($overRest($func, null, $flatten), $func + '');
}
return 'flatRest';
