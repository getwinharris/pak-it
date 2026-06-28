<?php
$baseIndexOf = require __DIR__ . '/_baseIndexOf.php';
function arrayIncludes($array, $value) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    return !!$length && $baseIndexOf($array, $value, 0) > -1;
}
return 'arrayIncludes';
