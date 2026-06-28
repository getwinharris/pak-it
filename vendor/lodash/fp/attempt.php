<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('attempt', require('../attempt'));

$func.placeholder = require('./placeholder');
return $func;

