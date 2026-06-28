<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('camelCase', require('../camelCase'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

