<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('trimEnd', require('../trimEnd'));

$func.placeholder = require('./placeholder');
return $func;

