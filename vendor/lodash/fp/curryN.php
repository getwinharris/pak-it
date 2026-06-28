<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('curryN', require('../curry'));

$func.placeholder = require('./placeholder');
return $func;

