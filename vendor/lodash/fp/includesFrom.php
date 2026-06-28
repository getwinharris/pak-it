<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('includesFrom', require('../includes'));

$func.placeholder = require('./placeholder');
return $func;

