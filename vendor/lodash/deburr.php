<?php
$deburrLetter = require __DIR__ . '/_deburrLetter.php';
$toString = require __DIR__ . '/toString.php';
$reLatin = '/[\\xc0-\\xd6\\xd8-\\xf6\\xf8-\\xff\\u0100-\\u017f]/g';
$rsComboMarksRange = '\\u0300-\\u036f';
$reComboHalfMarksRange = '\\ufe20-\\ufe2f';
$rsComboSymbolsRange = '\\u20d0-\\u20ff';
$rsComboRange = $rsComboMarksRange + $reComboHalfMarksRange + $rsComboSymbolsRange;
$rsCombo = '[' + $rsComboRange + ']';
$reComboMark = '/' . $rsCombo . '/' . 'g';
function deburr($string) {
    $string = $toString($string);
    return $string && str_replace($reComboMark, '', str_replace($reLatin, $deburrLetter, $string));
}
return 'deburr';
