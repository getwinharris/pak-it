<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('before', require('../before'));

$func.placeholder = require('./placeholder');
return $func;

