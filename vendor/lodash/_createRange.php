<?php
$baseRange = require __DIR__ . '/_baseRange.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
$toFinite = require __DIR__ . '/toFinite.php';
function createRange($fromRight) {
    return function($start, $end, $step) {
        if ($step && !is_numeric($step) && $isIterateeCall($start, $end, $step)) {
            $end = $step = null;
        }
        $start = $toFinite($start);
        if ($end === null) {
            $end = $start;
            $start = 0;
        } else {
            $end = $toFinite($end);
        }
        $step = ($step === null ? ($start < $end ? 1 : -1) : $toFinite($step));
        return $baseRange($start, $end, $step, $fromRight);
};
}
return 'createRange';
