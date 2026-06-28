<?php
$baseToString = require __DIR__ . '/_baseToString.php';
function toString($value) {
    return ($value == null ? '' : $baseToString($value));
}
return 'toString';
