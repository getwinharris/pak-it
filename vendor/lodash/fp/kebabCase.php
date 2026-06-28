<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('kebabCase', require('../kebabCase'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

