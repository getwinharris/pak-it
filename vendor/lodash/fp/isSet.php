<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isSet', require('../isSet'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

