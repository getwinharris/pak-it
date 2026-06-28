<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('lowerCase', require('../lowerCase'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

