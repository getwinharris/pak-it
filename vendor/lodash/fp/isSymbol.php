<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isSymbol', require('../isSymbol'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

