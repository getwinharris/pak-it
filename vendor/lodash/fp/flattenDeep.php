<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flattenDeep', require('../flattenDeep'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

