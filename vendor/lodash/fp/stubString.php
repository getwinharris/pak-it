<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('stubString', require('../stubString'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

