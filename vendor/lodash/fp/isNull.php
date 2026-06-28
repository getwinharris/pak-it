<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isNull', require('../isNull'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

