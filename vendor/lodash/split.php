<?php
$baseToString = require __DIR__ . '/_baseToString.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$hasUnicode = require __DIR__ . '/_hasUnicode.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$isRegExp = require __DIR__ . '/isRegExp.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$toString = require __DIR__ . '/toString.php';
$MAX_ARRAY_LENGTH = 4294967295;
function split($string, $separator, $limit) {
    if ($limit && !is_numeric($limit) && $isIterateeCall($string, $separator, $limit)) {
        $separator = $limit = null;
    }
    $limit = ($limit === null ? $MAX_ARRAY_LENGTH : $limit >> 0);
    if (!$limit) {
        return [];
    }
    $string = $toString($string);
    if ($string && is_string($separator) || $separator != null && !$isRegExp($separator)) {
        $separator = $baseToString($separator);
        if (!$separator && $hasUnicode($string)) {
            return $castSlice($stringToArray($string), 0, $limit);
        }
    }
    return explode($separator, $limit, $string);
}
return 'split';
