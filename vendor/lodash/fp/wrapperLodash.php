<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('wrapperLodash', require('../wrapperLodash'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

