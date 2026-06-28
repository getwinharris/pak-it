<?php
$isSymbol = require __DIR__ . '/isSymbol.php';
function baseExtremum($array, $iteratee, $comparator) {
    $index = -1;
    $length = (is_array($array) ? count($array) : strlen($array));
    while (++$index < $length) {
        $value = $array[$index];
        $current = $iteratee($value);
        if ($current != null && ($computed === null ? $current === $current && !$isSymbol($current) : $comparator($current, $computed))) {
            $computed = $current;
            $result = $value;
        }
    }
    return $result;
}
return 'baseExtremum';
