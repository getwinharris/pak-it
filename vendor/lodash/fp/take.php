<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('take', require('../take'));

$func.placeholder = require('./placeholder');
return $func;

