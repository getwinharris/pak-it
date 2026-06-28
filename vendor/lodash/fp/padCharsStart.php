<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('padCharsStart', require('../padStart'));

$func.placeholder = require('./placeholder');
return $func;

