<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toIterator', require('../toIterator'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

