<?php
$baseInRange = require __DIR__ . '/_baseInRange.php';
$toFinite = require __DIR__ . '/toFinite.php';
$toNumber = require __DIR__ . '/toNumber.php';
function inRange($number, $start, $end) {
    $start = $toFinite($start);
    if ($end === null) {
        $end = $start;
        $start = 0;
    } else {
        $end = $toFinite($end);
    }
    $number = $toNumber($number);
    return $baseInRange($number, $start, $end);
}
return 'inRange';
