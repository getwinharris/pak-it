<?php
$toString = require __DIR__ . '/toString.php';
function toLower($value) {
    return strtolower($toString($value));
}
return 'toLower';
