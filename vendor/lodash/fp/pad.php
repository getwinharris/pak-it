<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pad', require('../pad'));

$func.placeholder = require('./placeholder');
return $func;

