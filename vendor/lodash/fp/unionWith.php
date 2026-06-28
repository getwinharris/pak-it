<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unionWith', require('../unionWith'));

$func.placeholder = require('./placeholder');
return $func;

