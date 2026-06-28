<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('endsWith', require('../endsWith'));

$func.placeholder = require('./placeholder');
return $func;

