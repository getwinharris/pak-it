<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('constant', require('../constant'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

