<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignInWith', require('../assignInWith'));

$func.placeholder = require('./placeholder');
return $func;

