<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('gte', require('../gte'));

$func.placeholder = require('./placeholder');
return $func;

