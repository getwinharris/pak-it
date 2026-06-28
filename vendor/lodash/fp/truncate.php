<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('truncate', require('../truncate'));

$func.placeholder = require('./placeholder');
return $func;

