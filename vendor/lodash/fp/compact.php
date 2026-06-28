<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('compact', require('../compact'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

