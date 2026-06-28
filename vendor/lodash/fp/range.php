<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('range', require('../range'));

$func.placeholder = require('./placeholder');
return $func;

