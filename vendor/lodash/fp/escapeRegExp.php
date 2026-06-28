<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('escapeRegExp', require('../escapeRegExp'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

