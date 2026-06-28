<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedLastIndex', require('../sortedLastIndex'));

$func.placeholder = require('./placeholder');
return $func;

