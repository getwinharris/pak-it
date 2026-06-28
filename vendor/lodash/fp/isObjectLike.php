<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isObjectLike', require('../isObjectLike'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

