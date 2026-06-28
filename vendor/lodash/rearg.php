<?php
$createWrap = require __DIR__ . '/_createWrap.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$WRAP_REARG_FLAG = 256;
$rearg = $flatRest(function($func, $indexes) {
        return $createWrap($func, $WRAP_REARG_FLAG, null, null, null, $indexes);
});
return 'rearg';
