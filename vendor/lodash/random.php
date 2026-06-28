<?php
$baseRandom = require __DIR__ . '/_baseRandom.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$toFinite = require __DIR__ . '/toFinite.php';
$freeParseFloat = parseFloat;
$nativeMin = min;
$nativeRandom = random;
function random($lower, $upper, $floating) {
    if ($floating && !is_bool($floating) && $isIterateeCall($lower, $upper, $floating)) {
        $upper = $floating = null;
    }
    if ($floating === null) {
        if (is_bool($upper)) {
            $floating = $upper;
            $upper = null;
        } else if (is_bool($lower)) {
            $floating = $lower;
            $lower = null;
        }
    }
    if ($lower === null && $upper === null) {
        $lower = 0;
        $upper = 1;
    } else {
        $lower = $toFinite($lower);
        if ($upper === null) {
            $upper = $lower;
            $lower = 0;
        } else {
            $upper = $toFinite($upper);
        }
    }
    if ($lower > $upper) {
        $temp = $lower;
        $lower = $upper;
        $upper = $temp;
    }
    if ($floating || $lower % 1 || $upper % 1) {
        $rand = $nativeRandom();
        return $nativeMin($lower + $rand * $upper - $lower + $freeParseFloat('1e-' + (is_array($rand + '') ? count($rand + '') : strlen($rand + '')) - 1), $upper);
    }
    return $baseRandom($lower, $upper);
}
return 'random';
