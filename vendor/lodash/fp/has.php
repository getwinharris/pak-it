<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('has', require('../has'));

$func.placeholder = require('./placeholder');
return $func;

