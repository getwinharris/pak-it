<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isError', require('../isError'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

