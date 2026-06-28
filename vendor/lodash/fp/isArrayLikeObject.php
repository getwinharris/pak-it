<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isArrayLikeObject', require('../isArrayLikeObject'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

