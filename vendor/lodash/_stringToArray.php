<?php
$asciiToArray = require __DIR__ . '/_asciiToArray.php';
$hasUnicode = require __DIR__ . '/_hasUnicode.php';
$unicodeToArray = require __DIR__ . '/_unicodeToArray.php';
function stringToArray($string) {
    return ($hasUnicode($string) ? $unicodeToArray($string) : $asciiToArray($string));
}
return 'stringToArray';
