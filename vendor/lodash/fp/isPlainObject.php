<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isPlainObject', require('../isPlainObject'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

