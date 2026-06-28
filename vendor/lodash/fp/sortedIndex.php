<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedIndex', require('../sortedIndex'));

$func.placeholder = require('./placeholder');
return $func;

