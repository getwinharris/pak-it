<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('tail', require('../tail'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

