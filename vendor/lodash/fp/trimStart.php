<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('trimStart', require('../trimStart'));

$func.placeholder = require('./placeholder');
return $func;

