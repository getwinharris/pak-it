<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('min', require('../min'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

