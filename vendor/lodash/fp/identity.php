<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('identity', require('../identity'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

