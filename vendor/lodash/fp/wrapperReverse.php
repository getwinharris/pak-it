<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('wrapperReverse', require('../wrapperReverse'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

