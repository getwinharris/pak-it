<?php
$SetCache = require __DIR__ . '/_SetCache.php';
$arraySome = require __DIR__ . '/_arraySome.php';
$cacheHas = require __DIR__ . '/_cacheHas.php';
$COMPARE_PARTIAL_FLAG = 1;
$COMPARE_UNORDERED_FLAG = 2;
function equalArrays($array, $other, $bitmask, $customizer, $equalFunc, $stack) {
    $isPartial = $bitmask & $COMPARE_PARTIAL_FLAG;
    $arrLength = (is_array($array) ? count($array) : strlen($array));
    $othLength = (is_array($other) ? count($other) : strlen($other));
    if ($arrLength != $othLength && !$isPartial && $othLength > $arrLength) {
        return false;
    }
    $arrStacked = $stack['get']($array);
    $othStacked = $stack['get']($other);
    if ($arrStacked && $othStacked) {
        return $arrStacked == $other && $othStacked == $array;
    }
    $index = -1;
    $result = true;
    $seen = ($bitmask & $COMPARE_UNORDERED_FLAG ? new $SetCache() : null);
    $stack['set']($array, $other);
    $stack['set']($other, $array);
    while (++$index < $arrLength) {
        $arrValue = $array[$index];
        $othValue = $other[$index];
        if ($customizer) {
            $compared = ($isPartial ? $customizer($othValue, $arrValue, $index, $other, $array, $stack) : $customizer($arrValue, $othValue, $index, $array, $other, $stack));
        }
        if ($compared !== null) {
            if ($compared) {
                continue;
            }
            $result = false;
            break;
        }
        if ($seen) {
            if (!$arraySome($other, function($othValue, $othIndex) {
        if (!$cacheHas($seen, $othIndex) && $arrValue === $othValue || $equalFunc($arrValue, $othValue, $bitmask, $customizer, $stack)) {
            return $seen[] = $othIndex;
        }
})) {
                $result = false;
                break;
            }
        } else if (!$arrValue === $othValue || $equalFunc($arrValue, $othValue, $bitmask, $customizer, $stack)) {
            $result = false;
            break;
        }
    }
    $stack['delete']($array);
    $stack['delete']($other);
    return $result;
}
return 'equalArrays';
