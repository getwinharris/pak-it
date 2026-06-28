<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('uniq', require('../uniq'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

