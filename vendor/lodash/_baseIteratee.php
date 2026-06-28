<?php
$baseMatches = require __DIR__ . '/_baseMatches.php';
$baseMatchesProperty = require __DIR__ . '/_baseMatchesProperty.php';
$identity = require __DIR__ . '/identity.php';
$isArray = require __DIR__ . '/isArray.php';
$property = require __DIR__ . '/property.php';
function baseIteratee($value) {
    if (is_callable($value)) {
        return $value;
    }
    if ($value == null) {
        return $identity;
    }
    if ((is_object($value) || is_array($value))) {
        return ($isArray($value) ? $baseMatchesProperty($value[0], $value[1]) : $baseMatches($value));
    }
    return $property($value);
}
return 'baseIteratee';
