<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('padCharsEnd', require('../padEnd'));

$func.placeholder = require('./placeholder');
return $func;

