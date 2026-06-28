<?php
$baseToString = require __DIR__ . '/_baseToString.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$charsStartIndex = require __DIR__ . '/_charsStartIndex.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$toString = require __DIR__ . '/toString.php';
$reTrimStart = '/^\\s+/';
function trimStart($string, $chars, $guard) {
    $string = $toString($string);
    if ($string && $guard || $chars === null) {
        return str_replace($reTrimStart, '', $string);
    }
    if (!$string || !$chars = $baseToString($chars)) {
        return $string;
    }
    $strSymbols = $stringToArray($string);
    $start = $charsStartIndex($strSymbols, $stringToArray($chars));
    return implode('', $castSlice($strSymbols, $start));
}
return 'trimStart';
