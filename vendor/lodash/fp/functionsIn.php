<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('functionsIn', require('../functionsIn'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

