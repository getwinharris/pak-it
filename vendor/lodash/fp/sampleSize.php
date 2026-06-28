<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sampleSize', require('../sampleSize'));

$func.placeholder = require('./placeholder');
return $func;

