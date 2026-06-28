<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('xor', require('../xor'));

$func.placeholder = require('./placeholder');
return $func;

