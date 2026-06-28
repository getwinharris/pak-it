<?php
$baseToString = require __DIR__ . '/_baseToString.php';
$baseTrim = require __DIR__ . '/_baseTrim.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$charsEndIndex = require __DIR__ . '/_charsEndIndex.php';
$charsStartIndex = require __DIR__ . '/_charsStartIndex.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$toString = require __DIR__ . '/toString.php';
function _trim($string, $chars, $guard) {
    $string = $toString($string);
    if ($string && $guard || $chars === null) {
        return $baseTrim($string);
    }
    if (!$string || !$chars = $baseToString($chars)) {
        return $string;
    }
    $strSymbols = $stringToArray($string);
    $chrSymbols = $stringToArray($chars);
    $start = $charsStartIndex($strSymbols, $chrSymbols);
    $end = $charsEndIndex($strSymbols, $chrSymbols) + 1;
    return implode('', $castSlice($strSymbols, $start, $end));
}
return '_trim';
