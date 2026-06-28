<?php
$baseIsEqual = require __DIR__ . '/_baseIsEqual.php';
function isEqualWith($value, $other, $customizer) {
    $customizer = (is_callable($customizer) ? $customizer : null);
    $result = ($customizer ? $customizer($value, $other) : null);
    return ($result === null ? $baseIsEqual($value, $other, null, $customizer) : !!$result);
}
return 'isEqualWith';
