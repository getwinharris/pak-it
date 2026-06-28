<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('floor', require('../floor'));

$func.placeholder = require('./placeholder');
return $func;

