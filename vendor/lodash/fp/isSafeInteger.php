<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isSafeInteger', require('../isSafeInteger'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

