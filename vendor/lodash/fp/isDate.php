<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isDate', require('../isDate'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

