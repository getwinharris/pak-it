<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findIndex', require('../findIndex'));

$func.placeholder = require('./placeholder');
return $func;

