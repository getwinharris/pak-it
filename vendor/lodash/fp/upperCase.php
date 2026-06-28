<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('upperCase', require('../upperCase'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

