<?php
$asciiWords = require __DIR__ . '/_asciiWords.php';
$hasUnicodeWord = require __DIR__ . '/_hasUnicodeWord.php';
$toString = require __DIR__ . '/toString.php';
$unicodeWords = require __DIR__ . '/_unicodeWords.php';
function words($string, $pattern, $guard) {
    $string = $toString($string);
    $pattern = ($guard ? null : $pattern);
    if ($pattern === null) {
        return ($hasUnicodeWord($string) ? $unicodeWords($string) : $asciiWords($string));
    }
    return $string['match']($pattern) || [];
}
return 'words';
