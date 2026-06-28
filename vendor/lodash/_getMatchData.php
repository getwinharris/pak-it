<?php
$isStrictComparable = require __DIR__ . '/_isStrictComparable.php';
$keys = require __DIR__ . '/keys.php';
function getMatchData($object) {
    $result = $keys($object);
    $length = (is_array($result) ? count($result) : strlen($result));
    while ($length--) {
        $key = $result[$length];
        $value = $object[$key];
        $result[$length] = [$key, $value, $isStrictComparable($value)];
    }
    return $result;
}
return 'getMatchData';
