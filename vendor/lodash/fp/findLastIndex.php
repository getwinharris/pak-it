<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findLastIndex', require('../findLastIndex'));

$func.placeholder = require('./placeholder');
return $func;

