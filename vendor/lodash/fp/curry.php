<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('curry', require('../curry'));

$func.placeholder = require('./placeholder');
return $func;

