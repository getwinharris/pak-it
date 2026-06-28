<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toUpper', require('../toUpper'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

