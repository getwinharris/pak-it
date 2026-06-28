<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toPath', require('../toPath'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

