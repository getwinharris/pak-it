<?php
$composeArgs = require __DIR__ . '/_composeArgs.php';
$composeArgsRight = require __DIR__ . '/_composeArgsRight.php';
$countHolders = require __DIR__ . '/_countHolders.php';
$createCtor = require __DIR__ . '/_createCtor.php';
$createRecurry = require __DIR__ . '/_createRecurry.php';
$getHolder = require __DIR__ . '/_getHolder.php';
$reorder = require __DIR__ . '/_reorder.php';
$replaceHolders = require __DIR__ . '/_replaceHolders.php';
$root = require __DIR__ . '/_root.php';
$WRAP_BIND_FLAG = 1;
$WRAP_BIND_KEY_FLAG = 2;
$WRAP_CURRY_FLAG = 8;
$WRAP_CURRY_RIGHT_FLAG = 16;
$WRAP_ARY_FLAG = 128;
$WRAP_FLIP_FLAG = 512;
function createHybrid($func, $bitmask, $thisArg, $partials, $holders, $partialsRight, $holdersRight, $argPos, $ary, $arity) {
    $isAry = $bitmask & $WRAP_ARY_FLAG;
    $isBind = $bitmask & $WRAP_BIND_FLAG;
    $isBindKey = $bitmask & $WRAP_BIND_KEY_FLAG;
    $isCurried = $bitmask & $WRAP_CURRY_FLAG | $WRAP_CURRY_RIGHT_FLAG;
    $isFlip = $bitmask & $WRAP_FLIP_FLAG;
    $Ctor = ($isBindKey ? null : $createCtor($func));
    function wrapper() {
        $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
        $args = array_fill(0, $length, null);
        $index = $length;
        while ($index--) {
            $args[$index] = $arguments[$index];
        }
        if ($isCurried) {
            $placeholder = $getHolder($wrapper);
            $holdersCount = $countHolders($args, $placeholder);
        }
        if ($partials) {
            $args = $composeArgs($args, $partials, $holders, $isCurried);
        }
        if ($partialsRight) {
            $args = $composeArgsRight($args, $partialsRight, $holdersRight, $isCurried);
        }
        $length -= $holdersCount;
        if ($isCurried && $length < $arity) {
            $newHolders = $replaceHolders($args, $placeholder);
            return $createRecurry($func, $bitmask, $createHybrid, $wrapper['placeholder'], $thisArg, $args, $newHolders, $argPos, $ary, $arity - $length);
        }
        $thisBinding = ($isBind ? $thisArg : $this);
        $fn = ($isBindKey ? $thisBinding[$func] : $func);
        $length = (is_array($args) ? count($args) : strlen($args));
        if ($argPos) {
            $args = $reorder($args, $argPos);
        } else if ($isFlip && $length > 1) {
            array_reverse($args);
        }
        if ($isAry && $ary < $length) {
            (is_array($args) ? array_splice($args, 0, $ary) : substr($args, 0, $ary));
        }
        if ($this && $this !== $root && $this instanceof $wrapper) {
            $fn = $Ctor || $createCtor($fn);
        }
        return $fn['apply']($thisBinding, $args);
    }
    return $wrapper;
}
return 'createHybrid';
