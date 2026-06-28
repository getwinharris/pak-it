<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toSafeInteger', require('../toSafeInteger'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

