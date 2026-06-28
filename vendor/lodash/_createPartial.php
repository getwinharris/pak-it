<?php
$apply = require __DIR__ . '/_apply.php';
$createCtor = require __DIR__ . '/_createCtor.php';
$root = require __DIR__ . '/_root.php';
$WRAP_BIND_FLAG = 1;
function createPartial($func, $bitmask, $thisArg, $partials) {
    $isBind = $bitmask & $WRAP_BIND_FLAG;
    $Ctor = $createCtor($func);
    function wrapper() {
        $argsIndex = -1;
        $argsLength = (is_array($arguments) ? count($arguments) : strlen($arguments));
        $leftIndex = -1;
        $leftLength = (is_array($partials) ? count($partials) : strlen($partials));
        $args = array_fill(0, $leftLength + $argsLength, null);
        $fn = ($this && $this !== $root && $this instanceof $wrapper ? $Ctor : $func);
        while (++$leftIndex < $leftLength) {
            $args[$leftIndex] = $partials[$leftIndex];
        }
        while ($argsLength--) {
            $args[$leftIndex++] = $arguments[++$argsIndex];
        }
        return $apply($fn, ($isBind ? $thisArg : $this), $args);
    }
    return $wrapper;
}
return 'createPartial';
