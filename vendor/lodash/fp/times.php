<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('times', require('../times'));

$func.placeholder = require('./placeholder');
return $func;

