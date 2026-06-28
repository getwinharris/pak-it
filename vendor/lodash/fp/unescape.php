<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unescape', require('../unescape'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

