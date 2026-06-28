<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('stubObject', require('../stubObject'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

