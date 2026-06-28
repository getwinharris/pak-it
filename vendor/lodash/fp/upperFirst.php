<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('upperFirst', require('../upperFirst'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

