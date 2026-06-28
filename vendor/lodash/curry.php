<?php
$createWrap = require __DIR__ . '/_createWrap.php';
$WRAP_CURRY_FLAG = 8;
function curry($func, $arity, $guard) {
    $arity = ($guard ? null : $arity);
    $result = $createWrap($func, $WRAP_CURRY_FLAG, null, null, null, null, null, $arity);
    $result['placeholder'] = $curry['placeholder'];
    return $result;
}
$curry['placeholder'] = [];
return 'curry';
