<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('ceil', require('../ceil'));

$func.placeholder = require('./placeholder');
return $func;

