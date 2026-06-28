<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('words', require('../words'));

$func.placeholder = require('./placeholder');
return $func;

