<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$symbolProto = ($Symbol ? $Symbol['prototype'] : null);
$symbolValueOf = ($symbolProto ? $symbolProto['valueOf'] : null);
function cloneSymbol($symbol) {
    return ($symbolValueOf ? Object(call_user_func($symbolValueOf, $symbol)) : []);
}
return 'cloneSymbol';
