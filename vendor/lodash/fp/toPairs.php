<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toPairs', require('../toPairs'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

