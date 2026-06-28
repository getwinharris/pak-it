<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('defaultTo', require('../defaultTo'));

$func.placeholder = require('./placeholder');
return $func;

