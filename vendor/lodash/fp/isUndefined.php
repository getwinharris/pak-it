<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isUndefined', require('../isUndefined'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

