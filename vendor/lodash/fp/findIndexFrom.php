<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findIndexFrom', require('../findIndex'));

$func.placeholder = require('./placeholder');
return $func;

