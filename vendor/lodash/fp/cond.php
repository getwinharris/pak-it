<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('cond', require('../cond'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

