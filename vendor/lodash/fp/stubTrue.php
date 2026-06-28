<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('stubTrue', require('../stubTrue'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

