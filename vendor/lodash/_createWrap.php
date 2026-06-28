<?php
$baseSetData = require __DIR__ . '/_baseSetData.php';
$createBind = require __DIR__ . '/_createBind.php';
$createCurry = require __DIR__ . '/_createCurry.php';
$createHybrid = require __DIR__ . '/_createHybrid.php';
$createPartial = require __DIR__ . '/_createPartial.php';
$getData = require __DIR__ . '/_getData.php';
$mergeData = require __DIR__ . '/_mergeData.php';
$setData = require __DIR__ . '/_setData.php';
$setWrapToString = require __DIR__ . '/_setWrapToString.php';
$toInteger = require __DIR__ . '/toInteger.php';
$FUNC_ERROR_TEXT = 'Expected a function';
$WRAP_BIND_FLAG = 1;
$WRAP_BIND_KEY_FLAG = 2;
$WRAP_CURRY_FLAG = 8;
$WRAP_CURRY_RIGHT_FLAG = 16;
$WRAP_PARTIAL_FLAG = 32;
$WRAP_PARTIAL_RIGHT_FLAG = 64;
$nativeMax = max;
function createWrap($func, $bitmask, $thisArg, $partials, $holders, $argPos, $ary, $arity) {
    $isBindKey = $bitmask & $WRAP_BIND_KEY_FLAG;
    if (!$isBindKey && !is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $length = ($partials ? (is_array($partials) ? count($partials) : strlen($partials)) : 0);
    if (!$length) {
        $bitmask &= ~$WRAP_PARTIAL_FLAG | $WRAP_PARTIAL_RIGHT_FLAG;
        $partials = $holders = null;
    }
    $ary = ($ary === null ? $ary : $nativeMax($toInteger($ary), 0));
    $arity = ($arity === null ? $arity : $toInteger($arity));
    $length -= ($holders ? (is_array($holders) ? count($holders) : strlen($holders)) : 0);
    if ($bitmask & $WRAP_PARTIAL_RIGHT_FLAG) {
        $partialsRight = $partials;
        $holdersRight = $holders;
        $partials = $holders = null;
    }
    $data = ($isBindKey ? null : $getData($func));
    $newData = [$func, $bitmask, $thisArg, $partials, $holders, $partialsRight, $holdersRight, $argPos, $ary, $arity];
    if ($data) {
        $mergeData($newData, $data);
    }
    $func = $newData[0];
    $bitmask = $newData[1];
    $thisArg = $newData[2];
    $partials = $newData[3];
    $holders = $newData[4];
    $arity = $newData[9] = ($newData[9] === null ? ($isBindKey ? 0 : (is_array($func) ? count($func) : strlen($func))) : $nativeMax($newData[9] - $length, 0));
    if (!$arity && $bitmask & $WRAP_CURRY_FLAG | $WRAP_CURRY_RIGHT_FLAG) {
        $bitmask &= ~$WRAP_CURRY_FLAG | $WRAP_CURRY_RIGHT_FLAG;
    }
    if (!$bitmask || $bitmask == $WRAP_BIND_FLAG) {
        $result = $createBind($func, $bitmask, $thisArg);
    } else if ($bitmask == $WRAP_CURRY_FLAG || $bitmask == $WRAP_CURRY_RIGHT_FLAG) {
        $result = $createCurry($func, $bitmask, $arity);
    } else if ($bitmask == $WRAP_PARTIAL_FLAG || $bitmask == $WRAP_BIND_FLAG | $WRAP_PARTIAL_FLAG && !(is_array($holders) ? count($holders) : strlen($holders))) {
        $result = $createPartial($func, $bitmask, $thisArg, $partials);
    } else {
        $result = $createHybrid['apply'](null, $newData);
    }
    $setter = ($data ? $baseSetData : $setData);
    return $setWrapToString($setter($result, $newData), $func, $bitmask);
}
return 'createWrap';
