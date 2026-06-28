<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pick', require('../pick'));

$func.placeholder = require('./placeholder');
return $func;

