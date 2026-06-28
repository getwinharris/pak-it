<?php
$createCtor = require __DIR__ . '/_createCtor.php';
$root = require __DIR__ . '/_root.php';
$WRAP_BIND_FLAG = 1;
function createBind($func, $bitmask, $thisArg) {
    $isBind = $bitmask & $WRAP_BIND_FLAG;
    $Ctor = $createCtor($func);
    function wrapper() {
        $fn = ($this && $this !== $root && $this instanceof $wrapper ? $Ctor : $func);
        return $fn['apply'](($isBind ? $thisArg : $this), $arguments);
    }
    return $wrapper;
}
return 'createBind';
