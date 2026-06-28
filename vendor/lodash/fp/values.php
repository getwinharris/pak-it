<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('values', require('../values'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

