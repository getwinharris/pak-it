<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('rangeStep', require('../range'));

$func.placeholder = require('./placeholder');
return $func;

