<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('templateSettings', require('../templateSettings'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

