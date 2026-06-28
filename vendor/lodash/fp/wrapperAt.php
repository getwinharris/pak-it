<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('wrapperAt', require('../wrapperAt'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

