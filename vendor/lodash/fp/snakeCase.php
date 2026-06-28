<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('snakeCase', require('../snakeCase'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

