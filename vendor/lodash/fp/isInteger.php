<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('is_int', require('../is_int'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

