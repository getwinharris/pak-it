<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('defer', require('../defer'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

