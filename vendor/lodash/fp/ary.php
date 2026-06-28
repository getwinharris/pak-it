<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('ary', require('../ary'));

$func.placeholder = require('./placeholder');
return $func;

