<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('restFrom', require('../rest'));

$func.placeholder = require('./placeholder');
return $func;

