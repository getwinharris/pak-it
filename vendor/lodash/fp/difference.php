<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('difference', require('../difference'));

$func.placeholder = require('./placeholder');
return $func;

