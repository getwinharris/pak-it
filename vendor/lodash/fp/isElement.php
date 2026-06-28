<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isElement', require('../isElement'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

