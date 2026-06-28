<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('padChars', require('../pad'));

$func.placeholder = require('./placeholder');
return $func;

