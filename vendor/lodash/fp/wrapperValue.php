<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('wrapperValue', require('../wrapperValue'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

