<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toJSON', require('../toJSON'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

