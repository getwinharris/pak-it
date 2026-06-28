<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isMatch', require('../isMatch'));

$func.placeholder = require('./placeholder');
return $func;

