<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isArrayBuffer', require('../isArrayBuffer'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

