<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isNative', require('../isNative'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

