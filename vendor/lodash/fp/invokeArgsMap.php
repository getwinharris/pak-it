<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('invokeArgsMap', require('../invokeMap'));

$func.placeholder = require('./placeholder');
return $func;

