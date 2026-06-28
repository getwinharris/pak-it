<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('trimCharsEnd', require('../trimEnd'));

$func.placeholder = require('./placeholder');
return $func;

