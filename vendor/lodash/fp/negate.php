<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('negate', require('../negate'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

