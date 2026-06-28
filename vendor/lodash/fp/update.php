<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('update', require('../update'));

$func.placeholder = require('./placeholder');
return $func;

