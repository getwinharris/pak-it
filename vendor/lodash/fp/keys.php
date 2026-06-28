<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('keys', require('../keys'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

