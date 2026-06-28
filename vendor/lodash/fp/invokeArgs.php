<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('invokeArgs', require('../invoke'));

$func.placeholder = require('./placeholder');
return $func;

