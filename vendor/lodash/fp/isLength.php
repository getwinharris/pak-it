<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isLength', require('../isLength'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

