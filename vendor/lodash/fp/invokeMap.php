<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('invokeMap', require('../invokeMap'));

$func.placeholder = require('./placeholder');
return $func;

