<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isEmpty', require('../isEmpty'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

