<?php
$escapeHtmlChar = require __DIR__ . '/_escapeHtmlChar.php';
$toString = require __DIR__ . '/toString.php';
$reUnescapedHtml = '/[&<>"\']/g';
$reHasUnescapedHtml = '/' . $reUnescapedHtml['source'] . '/';
function escape($string) {
    $string = $toString($string);
    return ($string && preg_match($string, $reHasUnescapedHtml) ? str_replace($reUnescapedHtml, $escapeHtmlChar, $string) : $string);
}
return 'escape';
