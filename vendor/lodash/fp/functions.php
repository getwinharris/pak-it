<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('functions', require('../functions'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

