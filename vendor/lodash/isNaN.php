<?php
$isNumber = require __DIR__ . '/isNumber.php';
function isNaN($value) {
    return $isNumber($value) && $value != +$value;
}
return 'isNaN';
