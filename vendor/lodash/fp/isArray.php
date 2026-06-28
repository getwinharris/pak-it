<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isArray', require('../isArray'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

