<?php
$getWrapDetails = require __DIR__ . '/_getWrapDetails.php';
$insertWrapDetails = require __DIR__ . '/_insertWrapDetails.php';
$setToString = require __DIR__ . '/_setToString.php';
$updateWrapDetails = require __DIR__ . '/_updateWrapDetails.php';
function setWrapToString($wrapper, $reference, $bitmask) {
    $source = $reference + '';
    return $setToString($wrapper, $insertWrapDetails($source, $updateWrapDetails($getWrapDetails($source), $bitmask)));
}
return 'setWrapToString';
