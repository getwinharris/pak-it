<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isBuffer', require('../isBuffer'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

