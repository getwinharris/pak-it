<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('initial', require('../initial'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

