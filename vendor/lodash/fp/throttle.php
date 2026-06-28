<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('throttle', require('../throttle'));

$func.placeholder = require('./placeholder');
return $func;

