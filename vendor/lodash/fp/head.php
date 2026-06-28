<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('head', require('../head'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

