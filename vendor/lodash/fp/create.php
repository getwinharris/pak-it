<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('create', require('../create'));

$func.placeholder = require('./placeholder');
return $func;

