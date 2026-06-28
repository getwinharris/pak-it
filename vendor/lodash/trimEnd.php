<?php
$baseToString = require __DIR__ . '/_baseToString.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$charsEndIndex = require __DIR__ . '/_charsEndIndex.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$toString = require __DIR__ . '/toString.php';
$trimmedEndIndex = require __DIR__ . '/_trimmedEndIndex.php';
function trimEnd($string, $chars, $guard) {
    $string = $toString($string);
    if ($string && $guard || $chars === null) {
        return array_slice(0, $trimmedEndIndex($string) + 1, $string);
    }
    if (!$string || !$chars = $baseToString($chars)) {
        return $string;
    }
    $strSymbols = $stringToArray($string);
    $end = $charsEndIndex($strSymbols, $stringToArray($chars)) + 1;
    return implode('', $castSlice($strSymbols, 0, $end));
}
return 'trimEnd';
