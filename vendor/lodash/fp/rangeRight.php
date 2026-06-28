<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('rangeRight', require('../rangeRight'));

$func.placeholder = require('./placeholder');
return $func;

