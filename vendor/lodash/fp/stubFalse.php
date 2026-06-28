<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('stubFalse', require('../stubFalse'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

