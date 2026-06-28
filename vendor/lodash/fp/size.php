<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('size', require('../size'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

