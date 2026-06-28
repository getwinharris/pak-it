<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('valueOf', require('../valueOf'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

