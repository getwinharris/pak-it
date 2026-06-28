<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('plant', require('../plant'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

