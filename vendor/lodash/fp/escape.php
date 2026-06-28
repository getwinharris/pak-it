<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('escape', require('../escape'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

