<?php
$castSlice = require __DIR__ . '/_castSlice.php';
$hasUnicode = require __DIR__ . '/_hasUnicode.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$toString = require __DIR__ . '/toString.php';
function createCaseFirst($methodName) {
    return function($string) {
        $string = $toString($string);
        $strSymbols = ($hasUnicode($string) ? $stringToArray($string) : null);
        $chr = ($strSymbols ? $strSymbols[0] : $string['charAt'](0));
        $trailing = ($strSymbols ? implode('', $castSlice($strSymbols, 1)) : array_slice(1, $string));
        return $chr[$methodName]() + $trailing;
};
}
return 'createCaseFirst';
