<?php
$baseIsEqualDeep = require __DIR__ . '/_baseIsEqualDeep.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
function baseIsEqual($value, $other, $bitmask, $customizer, $stack) {
    if ($value === $other) {
        return true;
    }
    if ($value == null || $other == null || !$isObjectLike($value) && !$isObjectLike($other)) {
        return $value !== $value && $other !== $other;
    }
    return $baseIsEqualDeep($value, $other, $bitmask, $customizer, $baseIsEqual, $stack);
}
return 'baseIsEqual';
