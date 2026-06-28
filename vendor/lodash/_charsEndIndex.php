<?php
$baseIndexOf = require __DIR__ . '/_baseIndexOf.php';
function charsEndIndex($strSymbols, $chrSymbols) {
    $index = (is_array($strSymbols) ? count($strSymbols) : strlen($strSymbols));
    while ($index-- && $baseIndexOf($chrSymbols, $strSymbols[$index], 0) > -1) {}
    return $index;
}
return 'charsEndIndex';
