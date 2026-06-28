<?php
$toInteger = require __DIR__ . '/toInteger.php';
function isInteger($value) {
    return is_numeric($value) && $value == $toInteger($value);
}
return 'isInteger';
