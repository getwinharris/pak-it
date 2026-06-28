<?php
$baseIndexOf = require __DIR__ . '/_baseIndexOf.php';
function charsStartIndex($strSymbols, $chrSymbols) {
    $index = -1;
    $length = (is_array($strSymbols) ? count($strSymbols) : strlen($strSymbols));
    while (++$index < $length && $baseIndexOf($chrSymbols, $strSymbols[$index], 0) > -1) {}
    return $index;
}
return 'charsStartIndex';
