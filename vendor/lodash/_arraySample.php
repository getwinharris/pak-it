<?php
$baseRandom = require __DIR__ . '/_baseRandom.php';
function arraySample($array) {
    $length = (is_array($array) ? count($array) : strlen($array));
    return ($length ? $array[$baseRandom(0, $length - 1)] : null);
}
return 'arraySample';
