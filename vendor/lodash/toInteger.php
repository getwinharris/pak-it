<?php
$toFinite = require __DIR__ . '/toFinite.php';
function toInteger($value) {
    $result = $toFinite($value);
    $remainder = $result % 1;
    return ($result === $result ? ($remainder ? $result - $remainder : $result) : 0);
}
return 'toInteger';
