<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isEqual', require('../isEqual'));

$func.placeholder = require('./placeholder');
return $func;

