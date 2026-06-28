<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toPlainObject', require('../toPlainObject'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

