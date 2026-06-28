<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isString', require('../isString'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

