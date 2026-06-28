<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('startsWith', require('../startsWith'));

$func.placeholder = require('./placeholder');
return $func;

