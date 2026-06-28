<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('cloneDeep', require('../cloneDeep'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

