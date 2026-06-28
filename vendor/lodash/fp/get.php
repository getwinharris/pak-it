<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('get', require('../get'));

$func.placeholder = require('./placeholder');
return $func;

