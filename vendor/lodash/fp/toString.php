<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toString', require('../toString'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

