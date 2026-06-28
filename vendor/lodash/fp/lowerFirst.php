<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('lowerFirst', require('../lowerFirst'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

