<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('partition', require('../partition'));

$func.placeholder = require('./placeholder');
return $func;

