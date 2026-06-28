<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('zipWith', require('../zipWith'));

$func.placeholder = require('./placeholder');
return $func;

