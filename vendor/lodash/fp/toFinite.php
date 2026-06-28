<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toFinite', require('../toFinite'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

