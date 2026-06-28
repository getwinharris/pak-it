<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isMap', require('../isMap'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

