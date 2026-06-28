<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('is_finite', require('../is_finite'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

