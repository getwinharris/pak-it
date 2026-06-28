<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('now', require('../now'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

