<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isArguments', require('../isArguments'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

