<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('replace', require('../replace'));

$func.placeholder = require('./placeholder');
return $func;

