<?php
$toString = require __DIR__ . '/toString.php';
function toUpper($value) {
    return strtoupper($toString($value));
}
return 'toUpper';
