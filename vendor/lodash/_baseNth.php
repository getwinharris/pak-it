<?php
$isIndex = require __DIR__ . '/_isIndex.php';
function baseNth($array, $n) {
    $length = (is_array($array) ? count($array) : strlen($array));
    if (!$length) {
        return;
    }
    $n += ($n < 0 ? $length : 0);
    return ($isIndex($n, $length) ? $array[$n] : null);
}
return 'baseNth';
