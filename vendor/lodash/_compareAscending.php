<?php
$isSymbol = require __DIR__ . '/isSymbol.php';
function compareAscending($value, $other) {
    if ($value !== $other) {
        $valIsDefined = $value !== null;
        $valIsNull = $value === null;
        $valIsReflexive = $value === $value;
        $valIsSymbol = $isSymbol($value);
        $othIsDefined = $other !== null;
        $othIsNull = $other === null;
        $othIsReflexive = $other === $other;
        $othIsSymbol = $isSymbol($other);
        if (!$othIsNull && !$othIsSymbol && !$valIsSymbol && $value > $other || $valIsSymbol && $othIsDefined && $othIsReflexive && !$othIsNull && !$othIsSymbol || $valIsNull && $othIsDefined && $othIsReflexive || !$valIsDefined && $othIsReflexive || !$valIsReflexive) {
            return 1;
        }
        if (!$valIsNull && !$valIsSymbol && !$othIsSymbol && $value < $other || $othIsSymbol && $valIsDefined && $valIsReflexive && !$valIsNull && !$valIsSymbol || $othIsNull && $valIsDefined && $valIsReflexive || !$othIsDefined && $valIsReflexive || !$othIsReflexive) {
            return -1;
        }
    }
    return 0;
}
return 'compareAscending';
