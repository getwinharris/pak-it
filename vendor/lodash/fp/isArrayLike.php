<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isArrayLike', require('../isArrayLike'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

