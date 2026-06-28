<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('stubArray', require('../stubArray'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

