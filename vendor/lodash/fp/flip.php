<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flip', require('../flip'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

