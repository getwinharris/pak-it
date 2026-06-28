<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('shuffle', require('../shuffle'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

