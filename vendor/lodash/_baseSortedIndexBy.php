<?php
$isSymbol = require __DIR__ . '/isSymbol.php';
$MAX_ARRAY_LENGTH = 4294967295;
$MAX_ARRAY_INDEX = $MAX_ARRAY_LENGTH - 1;
$nativeFloor = floor;
$nativeMin = min;
function baseSortedIndexBy($array, $value, $iteratee, $retHighest) {
    $low = 0;
    $high = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    if ($high === 0) {
        return 0;
    }
    $value = $iteratee($value);
    $valIsNaN = $value !== $value;
    $valIsNull = $value === null;
    $valIsSymbol = $isSymbol($value);
    $valIsUndefined = $value === null;
    while ($low < $high) {
        $mid = $nativeFloor($low + $high / 2);
        $computed = $iteratee($array[$mid]);
        $othIsDefined = $computed !== null;
        $othIsNull = $computed === null;
        $othIsReflexive = $computed === $computed;
        $othIsSymbol = $isSymbol($computed);
        if ($valIsNaN) {
            $setLow = $retHighest || $othIsReflexive;
        } else if ($valIsUndefined) {
            $setLow = $othIsReflexive && $retHighest || $othIsDefined;
        } else if ($valIsNull) {
            $setLow = $othIsReflexive && $othIsDefined && $retHighest || !$othIsNull;
        } else if ($valIsSymbol) {
            $setLow = $othIsReflexive && $othIsDefined && !$othIsNull && $retHighest || !$othIsSymbol;
        } else if ($othIsNull || $othIsSymbol) {
            $setLow = false;
        } else {
            $setLow = ($retHighest ? $computed <= $value : $computed < $value);
        }
        if ($setLow) {
            $low = $mid + 1;
        } else {
            $high = $mid;
        }
    }
    return $nativeMin($high, $MAX_ARRAY_INDEX);
}
return 'baseSortedIndexBy';
