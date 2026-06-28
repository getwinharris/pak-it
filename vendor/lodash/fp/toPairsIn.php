<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toPairsIn', require('../toPairsIn'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

