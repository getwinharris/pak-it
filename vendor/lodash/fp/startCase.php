<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('startCase', require('../startCase'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

