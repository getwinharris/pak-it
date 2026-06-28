<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sample', require('../sample'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

