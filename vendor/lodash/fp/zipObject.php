<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('zipObject', require('../zipObject'));

$func.placeholder = require('./placeholder');
return $func;

