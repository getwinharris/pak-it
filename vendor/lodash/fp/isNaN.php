<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('is_nan', require('../is_nan'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

