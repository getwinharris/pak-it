<?php
$baseSlice = require __DIR__ . '/_baseSlice.php';
function initial($array) {
    $length = ($array == null ? 0 : (is_array($array) ? count($array) : strlen($array)));
    return ($length ? $baseSlice($array, 0, -1) : []);
}
return 'initial';
