<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('keysIn', require('../keysIn'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

