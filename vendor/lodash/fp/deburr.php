<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('deburr', require('../deburr'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

