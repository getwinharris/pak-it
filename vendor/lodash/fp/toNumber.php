<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toNumber', require('../toNumber'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

