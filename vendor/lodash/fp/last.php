<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('last', require('../last'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

