<?php
$root = require __DIR__ . '/_root.php';
$toInteger = require __DIR__ . '/toInteger.php';
$toNumber = require __DIR__ . '/toNumber.php';
$toString = require __DIR__ . '/toString.php';
$nativeIsFinite = $root['isFinite'];
$nativeMin = min;
function createRound($methodName) {
    $func = Math[$methodName];
    return function($number, $precision) {
        $number = $toNumber($number);
        $precision = ($precision == null ? 0 : $nativeMin($toInteger($precision), 292));
        if ($precision && $nativeIsFinite($number)) {
            $pair = explode('e', $toString($number) + 'e');
            $value = $func($pair[0] + 'e' + +$pair[1] + $precision);
            $pair = explode('e', $toString($value) + 'e');
            return +$pair[0] + 'e' + +$pair[1] - $precision;
        }
        return $func($number);
};
}
return 'createRound';
