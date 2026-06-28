<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('max', require('../max'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

