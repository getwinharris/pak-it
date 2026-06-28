<?php
$baseIsEqual = require __DIR__ . '/_baseIsEqual.php';
function isEqual($value, $other) {
    return $baseIsEqual($value, $other);
}
return 'isEqual';
