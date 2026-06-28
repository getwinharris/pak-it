<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isNil', require('../isNil'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

