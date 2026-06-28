<?php
$baseClamp = require __DIR__ . '/_baseClamp.php';
$toNumber = require __DIR__ . '/toNumber.php';
function clamp($number, $lower, $upper) {
    if ($upper === null) {
        $upper = $lower;
        $lower = null;
    }
    if ($upper !== null) {
        $upper = $toNumber($upper);
        $upper = ($upper === $upper ? $upper : 0);
    }
    if ($lower !== null) {
        $lower = $toNumber($lower);
        $lower = ($lower === $lower ? $lower : 0);
    }
    return $baseClamp($toNumber($number), $lower, $upper);
}
return 'clamp';
