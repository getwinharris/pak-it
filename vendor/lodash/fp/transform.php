<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('transform', require('../transform'));

$func.placeholder = require('./placeholder');
return $func;

