<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('at', require('../at'));

$func.placeholder = require('./placeholder');
return $func;

