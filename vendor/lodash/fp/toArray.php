<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toArray', require('../toArray'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

