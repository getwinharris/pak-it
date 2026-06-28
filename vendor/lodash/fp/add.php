<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('add', require('../add'));

$func.placeholder = require('./placeholder');
return $func;

