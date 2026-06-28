<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('commit', require('../commit'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

