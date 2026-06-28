<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isTypedArray', require('../isTypedArray'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

