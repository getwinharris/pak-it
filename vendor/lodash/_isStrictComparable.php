<?php
$isObject = require __DIR__ . '/isObject.php';
function isStrictComparable($value) {
    return $value === $value && !$isObject($value);
}
return 'isStrictComparable';
