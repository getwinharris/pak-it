<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('nth', require('../nth'));

$func.placeholder = require('./placeholder');
return $func;

