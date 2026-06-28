<?php
$apply = require __DIR__ . '/_apply.php';
$arrayMap = require __DIR__ . '/_arrayMap.php';
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$baseUnary = require __DIR__ . '/_baseUnary.php';
$castRest = require __DIR__ . '/_castRest.php';
$isArray = require __DIR__ . '/isArray.php';
$nativeMin = min;
$overArgs = $castRest(function($func, $transforms) {
        $transforms = ((is_array($transforms) ? count($transforms) : strlen($transforms)) == 1 && $isArray($transforms[0]) ? $arrayMap($transforms[0], $baseUnary($baseIteratee)) : $arrayMap($baseFlatten($transforms, 1), $baseUnary($baseIteratee)));
        $funcsLength = (is_array($transforms) ? count($transforms) : strlen($transforms));
        return $baseRest(function($args) {
        $index = -1;
        $length = $nativeMin((is_array($args) ? count($args) : strlen($args)), $funcsLength);
        while (++$index < $length) {
            $args[$index] = call_user_func($transforms[$index], $this, $args[$index]);
        }
        return $apply($func, $this, $args);
});
});
return 'overArgs';
