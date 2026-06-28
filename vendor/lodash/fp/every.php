<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('every', require('../every'));

$func.placeholder = require('./placeholder');
return $func;

