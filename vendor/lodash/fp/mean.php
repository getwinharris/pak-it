<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mean', require('../mean'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

