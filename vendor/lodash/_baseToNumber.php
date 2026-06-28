<?php
$isSymbol = require __DIR__ . '/isSymbol.php';
$NAN = 0 / 0;
function baseToNumber($value) {
    if (is_numeric($value)) {
        return $value;
    }
    if ($isSymbol($value)) {
        return $NAN;
    }
    return +$value;
}
return 'baseToNumber';
