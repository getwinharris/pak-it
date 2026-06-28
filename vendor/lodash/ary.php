<?php
$createWrap = require __DIR__ . '/_createWrap.php';
$WRAP_ARY_FLAG = 128;
function ary($func, $n, $guard) {
    $n = ($guard ? null : $n);
    $n = ($func && $n == null ? (is_array($func) ? count($func) : strlen($func)) : $n);
    return $createWrap($func, $WRAP_ARY_FLAG, null, null, null, null, $n);
}
return 'ary';
