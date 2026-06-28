<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('capitalize', require('../capitalize'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

