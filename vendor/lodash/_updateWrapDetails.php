<?php
$arrayEach = require __DIR__ . '/_arrayEach.php';
$arrayIncludes = require __DIR__ . '/_arrayIncludes.php';
$WRAP_BIND_FLAG = 1;
$WRAP_BIND_KEY_FLAG = 2;
$WRAP_CURRY_FLAG = 8;
$WRAP_CURRY_RIGHT_FLAG = 16;
$WRAP_PARTIAL_FLAG = 32;
$WRAP_PARTIAL_RIGHT_FLAG = 64;
$WRAP_ARY_FLAG = 128;
$WRAP_REARG_FLAG = 256;
$WRAP_FLIP_FLAG = 512;
$wrapFlags = [['ary', $WRAP_ARY_FLAG], ['bind', $WRAP_BIND_FLAG], ['bindKey', $WRAP_BIND_KEY_FLAG], ['curry', $WRAP_CURRY_FLAG], ['curryRight', $WRAP_CURRY_RIGHT_FLAG], ['flip', $WRAP_FLIP_FLAG], ['partial', $WRAP_PARTIAL_FLAG], ['partialRight', $WRAP_PARTIAL_RIGHT_FLAG], ['rearg', $WRAP_REARG_FLAG]];
function updateWrapDetails($details, $bitmask) {
    $arrayEach($wrapFlags, function($pair) {
        $value = '_.' + $pair[0];
        if ($bitmask & $pair[1] && !$arrayIncludes($details, $value)) {
            $details[] = $value;
        }
});
    return sort($details);
}
return 'updateWrapDetails';
