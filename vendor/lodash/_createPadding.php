<?php
$baseRepeat = require __DIR__ . '/_baseRepeat.php';
$baseToString = require __DIR__ . '/_baseToString.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$hasUnicode = require __DIR__ . '/_hasUnicode.php';
$stringSize = require __DIR__ . '/_stringSize.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$nativeCeil = ceil;
function createPadding($length, $chars) {
    $chars = ($chars === null ? ' ' : $baseToString($chars));
    $charsLength = (is_array($chars) ? count($chars) : strlen($chars));
    if ($charsLength < 2) {
        return ($charsLength ? $baseRepeat($chars, $length) : $chars);
    }
    $result = $baseRepeat($chars, $nativeCeil($length / $stringSize($chars)));
    return ($hasUnicode($chars) ? implode('', $castSlice($stringToArray($result), 0, $length)) : array_slice(0, $length, $result));
}
return 'createPadding';
