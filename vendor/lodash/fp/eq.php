<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('eq', require('../eq'));

$func.placeholder = require('./placeholder');
return $func;

