<?php
$eq = require __DIR__ . '/eq.php';
function assocIndexOf($array, $key) {
    $length = (is_array($array) ? count($array) : strlen($array));
    while ($length--) {
        if ($eq($array[$length][0], $key)) {
            return $length;
        }
    }
    return -1;
}
return 'assocIndexOf';
