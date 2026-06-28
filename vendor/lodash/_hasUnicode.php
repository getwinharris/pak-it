<?php
$rsAstralRange = '\\ud800-\\udfff';
$rsComboMarksRange = '\\u0300-\\u036f';
$reComboHalfMarksRange = '\\ufe20-\\ufe2f';
$rsComboSymbolsRange = '\\u20d0-\\u20ff';
$rsComboRange = $rsComboMarksRange + $reComboHalfMarksRange + $rsComboSymbolsRange;
$rsVarRange = '\\ufe0e\\ufe0f';
$rsZWJ = '\\u200d';
$reHasUnicode = '/' . '[' + $rsZWJ + $rsAstralRange + $rsComboRange + $rsVarRange + ']' . '/';
function hasUnicode($string) {
    return preg_match($string, $reHasUnicode);
}
return 'hasUnicode';
