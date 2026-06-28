<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('nthArg', require('../nthArg'));

$func.placeholder = require('./placeholder');
return $func;

