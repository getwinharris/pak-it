<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toLength', require('../toLength'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

