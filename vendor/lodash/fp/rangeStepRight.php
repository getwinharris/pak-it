<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('rangeStepRight', require('../rangeRight'));

$func.placeholder = require('./placeholder');
return $func;

