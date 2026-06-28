<?php
$toString = require __DIR__ . '/toString.php';
$reRegExpChar = '/[\\\\^$.*+?()[\\]{}|]/g';
$reHasRegExpChar = '/' . $reRegExpChar['source'] . '/';
function escapeRegExp($string) {
    $string = $toString($string);
    return ($string && preg_match($string, $reHasRegExpChar) ? str_replace($reRegExpChar, '\\$&', $string) : $string);
}
return 'escapeRegExp';
