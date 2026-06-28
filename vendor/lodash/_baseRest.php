<?php
$identity = require __DIR__ . '/identity.php';
$overRest = require __DIR__ . '/_overRest.php';
$setToString = require __DIR__ . '/_setToString.php';
function baseRest($func, $start) {
    return $setToString($overRest($func, $start, $identity), $func + '');
}
return 'baseRest';
