<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('filter', require('../filter'));

$func.placeholder = require('./placeholder');
return $func;

