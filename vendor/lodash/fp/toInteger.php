<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toInteger', require('../toInteger'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

