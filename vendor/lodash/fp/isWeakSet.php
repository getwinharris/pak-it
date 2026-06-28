<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isWeakSet', require('../isWeakSet'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

