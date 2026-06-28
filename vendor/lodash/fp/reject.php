<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('reject', require('../reject'));

$func.placeholder = require('./placeholder');
return $func;

