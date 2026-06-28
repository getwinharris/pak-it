<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('getOr', require('../get'));

$func.placeholder = require('./placeholder');
return $func;

