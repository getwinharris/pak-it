<?php
$createWrap = require __DIR__ . '/_createWrap.php';
$WRAP_CURRY_RIGHT_FLAG = 16;
function curryRight($func, $arity, $guard) {
    $arity = ($guard ? null : $arity);
    $result = $createWrap($func, $WRAP_CURRY_RIGHT_FLAG, null, null, null, null, null, $arity);
    $result['placeholder'] = $curryRight['placeholder'];
    return $result;
}
$curryRight['placeholder'] = [];
return 'curryRight';
