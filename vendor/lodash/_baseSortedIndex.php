<?php
$baseSortedIndexBy = require __DIR__ . '/_baseSortedIndexBy.php';
$identity = require __DIR__ . '/identity.php';
$isSymbol = require __DIR__ . '/isSymbol.php';
$MAX_ARRAY_LENGTH = 4294967295;
$HALF_MAX_ARRAY_LENGTH = $MAX_ARRAY_LENGTH >> 1;
function baseSortedIndex($array, $value, $retHighest) {
    $low = 0;
    $high = ($array == null ? $low : (is_array($array) ? count($array) : strlen($array)));
    if (is_numeric($value) && $value === $value && $high <= $HALF_MAX_ARRAY_LENGTH) {
        while ($low < $high) {
            $mid = $low + $high >> 1;
            $computed = $array[$mid];
            if ($computed !== null && !$isSymbol($computed) && ($retHighest ? $computed <= $value : $computed < $value)) {
                $low = $mid + 1;
            } else {
                $high = $mid;
            }
        }
        return $high;
    }
    return $baseSortedIndexBy($array, $value, $identity, $retHighest);
}
return 'baseSortedIndex';
