<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isWeakMap', require('../isWeakMap'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

