<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('padEnd', require('../padEnd'));

$func.placeholder = require('./placeholder');
return $func;

