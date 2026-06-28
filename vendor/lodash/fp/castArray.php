<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('castArray', require('../castArray'));

$func.placeholder = require('./placeholder');
return $func;

