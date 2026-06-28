<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('clone', require('../clone'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

