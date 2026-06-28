<?php
$isLaziable = require __DIR__ . '/_isLaziable.php';
$setData = require __DIR__ . '/_setData.php';
$setWrapToString = require __DIR__ . '/_setWrapToString.php';
$WRAP_BIND_FLAG = 1;
$WRAP_BIND_KEY_FLAG = 2;
$WRAP_CURRY_BOUND_FLAG = 4;
$WRAP_CURRY_FLAG = 8;
$WRAP_PARTIAL_FLAG = 32;
$WRAP_PARTIAL_RIGHT_FLAG = 64;
function createRecurry($func, $bitmask, $wrapFunc, $placeholder, $thisArg, $partials, $holders, $argPos, $ary, $arity) {
    $isCurry = $bitmask & $WRAP_CURRY_FLAG;
    $newHolders = ($isCurry ? $holders : null);
    $newHoldersRight = ($isCurry ? null : $holders);
    $newPartials = ($isCurry ? $partials : null);
    $newPartialsRight = ($isCurry ? null : $partials);
    $bitmask |= ($isCurry ? $WRAP_PARTIAL_FLAG : $WRAP_PARTIAL_RIGHT_FLAG);
    $bitmask &= ~($isCurry ? $WRAP_PARTIAL_RIGHT_FLAG : $WRAP_PARTIAL_FLAG);
    if (!$bitmask & $WRAP_CURRY_BOUND_FLAG) {
        $bitmask &= ~$WRAP_BIND_FLAG | $WRAP_BIND_KEY_FLAG;
    }
    $newData = [$func, $bitmask, $thisArg, $newPartials, $newHolders, $newPartialsRight, $newHoldersRight, $argPos, $ary, $arity];
    $result = $wrapFunc['apply'](null, $newData);
    if ($isLaziable($func)) {
        $setData($result, $newData);
    }
    $result['placeholder'] = $placeholder;
    return $setWrapToString($result, $func, $bitmask);
}
return 'createRecurry';
