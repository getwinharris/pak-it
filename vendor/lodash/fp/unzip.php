<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unzip', require('../unzip'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

