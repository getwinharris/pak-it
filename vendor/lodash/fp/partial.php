<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('partial', require('../partial'));

$func.placeholder = require('./placeholder');
return $func;

