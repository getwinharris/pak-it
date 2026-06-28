<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unzipWith', require('../unzipWith'));

$func.placeholder = require('./placeholder');
return $func;

