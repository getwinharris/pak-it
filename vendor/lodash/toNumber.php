<?php
$baseTrim = require __DIR__ . '/_baseTrim.php';
$isObject = require __DIR__ . '/isObject.php';
$isSymbol = require __DIR__ . '/isSymbol.php';
$NAN = 0 / 0;
$reIsBadHex = '/^[-+]0x[0-9a-f]+$/i';
$reIsBinary = '/^0b[01]+$/i';
$reIsOctal = '/^0o[0-7]+$/i';
$freeParseInt = parseInt;
function toNumber($value) {
    if (is_numeric($value)) {
        return $value;
    }
    if ($isSymbol($value)) {
        return $NAN;
    }
    if ($isObject($value)) {
        $other = (is_callable($value['valueOf']) ? $value['valueOf']() : $value);
        $value = ($isObject($other) ? $other + '' : $other);
    }
    if (!is_string($value)) {
        return ($value === 0 ? $value : +$value);
    }
    $value = $baseTrim($value);
    $isBinary = preg_match($value, $reIsBinary);
    return ($isBinary || preg_match($value, $reIsOctal) ? $freeParseInt(array_slice(2, $value), ($isBinary ? 2 : 8)) : (preg_match($value, $reIsBadHex) ? $NAN : +$value));
}
return 'toNumber';
