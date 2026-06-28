<?php
$baseDifference = require __DIR__ . '/_baseDifference.php';
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$baseUniq = require __DIR__ . '/_baseUniq.php';
function baseXor($arrays, $iteratee, $comparator) {
    $length = (is_array($arrays) ? count($arrays) : strlen($arrays));
    if ($length < 2) {
        return ($length ? $baseUniq($arrays[0]) : []);
    }
    $index = -1;
    $result = array_fill(0, $length, null);
    while (++$index < $length) {
        $array = $arrays[$index];
        $othIndex = -1;
        while (++$othIndex < $length) {
            if ($othIndex != $index) {
                $result[$index] = $baseDifference($result[$index] || $array, $arrays[$othIndex], $iteratee, $comparator);
            }
        }
    }
    return $baseUniq($baseFlatten($result, 1), $iteratee, $comparator);
}
return 'baseXor';
