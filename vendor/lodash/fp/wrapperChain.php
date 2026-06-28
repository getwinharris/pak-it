<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('wrapperChain', require('../wrapperChain'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

