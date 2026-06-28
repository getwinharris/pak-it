<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flatten', require('../flatten'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

