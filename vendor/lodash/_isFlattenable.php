<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$isArguments = require __DIR__ . '/isArguments.php';
$isArray = require __DIR__ . '/isArray.php';
$spreadableSymbol = ($Symbol ? $Symbol['isConcatSpreadable'] : null);
function isFlattenable($value) {
    return $isArray($value) || $isArguments($value) || !!$spreadableSymbol && $value && $value[$spreadableSymbol];
}
return 'isFlattenable';
