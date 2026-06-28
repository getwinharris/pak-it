<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('clamp', require('../clamp'));

$func.placeholder = require('./placeholder');
return $func;

