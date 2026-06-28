<?php
$baseSum = require __DIR__ . '/_baseSum.php';
$NAN = 0 / 0;
function baseMean($array, $iteratee) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    return ($length ? $baseSum($array, $iteratee) / $length : $NAN);
}
return 'baseMean';
