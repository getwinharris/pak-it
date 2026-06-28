<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isRegExp', require('../isRegExp'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

