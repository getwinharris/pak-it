<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('defaults', require('../defaults'));

$func.placeholder = require('./placeholder');
return $func;

