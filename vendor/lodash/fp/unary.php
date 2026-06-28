<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unary', require('../unary'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

