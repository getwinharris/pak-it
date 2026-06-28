<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findLastIndexFrom', require('../findLastIndex'));

$func.placeholder = require('./placeholder');
return $func;

