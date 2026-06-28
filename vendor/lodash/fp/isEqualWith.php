<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isEqualWith', require('../isEqualWith'));

$func.placeholder = require('./placeholder');
return $func;

