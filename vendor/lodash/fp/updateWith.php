<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('updateWith', require('../updateWith'));

$func.placeholder = require('./placeholder');
return $func;

