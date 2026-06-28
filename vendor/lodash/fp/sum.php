<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sum', require('../sum'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

