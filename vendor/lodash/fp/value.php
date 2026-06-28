<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('value', require('../value'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

