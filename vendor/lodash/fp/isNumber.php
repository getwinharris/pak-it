<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isNumber', require('../isNumber'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

