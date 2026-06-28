<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isObject', require('../isObject'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

