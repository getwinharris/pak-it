<?php
$createWrap = require __DIR__ . '/_createWrap.php';
$WRAP_FLIP_FLAG = 512;
function flip($func) {
    return $createWrap($func, $WRAP_FLIP_FLAG);
}
return 'flip';
