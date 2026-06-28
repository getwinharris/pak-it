<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('next', require('../next'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

