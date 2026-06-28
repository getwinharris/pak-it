<?php
$toString = require __DIR__ . '/toString.php';
$unescapeHtmlChar = require __DIR__ . '/_unescapeHtmlChar.php';
$reEscapedHtml = '/&(?:amp|lt|gt|quot|#39);/g';
$reHasEscapedHtml = '/' . $reEscapedHtml['source'] . '/';
function unescape($string) {
    $string = $toString($string);
    return ($string && preg_match($string, $reHasEscapedHtml) ? str_replace($reEscapedHtml, $unescapeHtmlChar, $string) : $string);
}
return 'unescape';
