<?php
$baseTimes = require __DIR__ . '/_baseTimes.php';
$castFunction = require __DIR__ . '/_castFunction.php';
$toInteger = require __DIR__ . '/toInteger.php';
$MAX_SAFE_INTEGER = 9007199254740991;
$MAX_ARRAY_LENGTH = 4294967295;
$nativeMin = min;
function times($n, $iteratee) {
    $n = $toInteger($n);
    if ($n < 1 || $n > $MAX_SAFE_INTEGER) {
        return [];
    }
    $index = $MAX_ARRAY_LENGTH;
    $length = $nativeMin($n, $MAX_ARRAY_LENGTH);
    $iteratee = $castFunction($iteratee);
    $n -= $MAX_ARRAY_LENGTH;
    $result = $baseTimes($length, $iteratee);
    while (++$index < $n) {
        $iteratee($index);
    }
    return $result;
}
return 'times';
