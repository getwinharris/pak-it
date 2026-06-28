<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isFunction', require('../isFunction'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

