<?php
$trimmedEndIndex = require __DIR__ . '/_trimmedEndIndex.php';
$reTrimStart = '/^\\s+/';
function baseTrim($string) {
    return ($string ? str_replace($reTrimStart, '', array_slice(0, $trimmedEndIndex($string) + 1, $string)) : $string);
}
return 'baseTrim';
