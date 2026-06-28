<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignInAllWith', require('../assignInWith'));

$func.placeholder = require('./placeholder');
return $func;

