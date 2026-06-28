<?php
$apply = require __DIR__ . '/_apply.php';
$createCtor = require __DIR__ . '/_createCtor.php';
$createHybrid = require __DIR__ . '/_createHybrid.php';
$createRecurry = require __DIR__ . '/_createRecurry.php';
$getHolder = require __DIR__ . '/_getHolder.php';
$replaceHolders = require __DIR__ . '/_replaceHolders.php';
$root = require __DIR__ . '/_root.php';
function createCurry($func, $bitmask, $arity) {
    $Ctor = $createCtor($func);
    function wrapper() {
        $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
        $args = array_fill(0, $length, null);
        $index = $length;
        $placeholder = $getHolder($wrapper);
        while ($index--) {
            $args[$index] = $arguments[$index];
        }
        $holders = ($length < 3 && $args[0] !== $placeholder && $args[$length - 1] !== $placeholder ? [] : $replaceHolders($args, $placeholder));
        $length -= (is_array($holders) ? count($holders) : strlen($holders));
        if ($length < $arity) {
            return $createRecurry($func, $bitmask, $createHybrid, $wrapper['placeholder'], null, $args, $holders, null, null, $arity - $length);
        }
        $fn = ($this && $this !== $root && $this instanceof $wrapper ? $Ctor : $func);
        return $apply($fn, $this, $args);
    }
    return $wrapper;
}
return 'createCurry';
