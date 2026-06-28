<?php
$asciiSize = require __DIR__ . '/_asciiSize.php';
$hasUnicode = require __DIR__ . '/_hasUnicode.php';
$unicodeSize = require __DIR__ . '/_unicodeSize.php';
function stringSize($string) {
    return ($hasUnicode($string) ? $unicodeSize($string) : $asciiSize($string));
}
return 'stringSize';
