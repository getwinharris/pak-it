<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('forOwn', require('../forOwn'));

$func.placeholder = require('./placeholder');
return $func;

