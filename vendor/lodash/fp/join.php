<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('join', require('../join'));

$func.placeholder = require('./placeholder');
return $func;

