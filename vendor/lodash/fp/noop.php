<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('noop', require('../noop'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

