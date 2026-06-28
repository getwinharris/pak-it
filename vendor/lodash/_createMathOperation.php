<?php
$baseToNumber = require __DIR__ . '/_baseToNumber.php';
$baseToString = require __DIR__ . '/_baseToString.php';
function createMathOperation($operator, $defaultValue) {
    return function($value, $other) {
        $result = null;
        if ($value === null && $other === null) {
            return $defaultValue;
        }
        if ($value !== null) {
            $result = $value;
        }
        if ($other !== null) {
            if ($result === null) {
                return $other;
            }
            if (is_string($value) || is_string($other)) {
                $value = $baseToString($value);
                $other = $baseToString($other);
            } else {
                $value = $baseToNumber($value);
                $other = $baseToNumber($other);
            }
            $result = $operator($value, $other);
        }
        return $result;
};
}
return 'createMathOperation';
