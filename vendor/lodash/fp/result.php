<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('result', require('../result'));

$func.placeholder = require('./placeholder');
return $func;

