<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('cloneWith', require('../cloneWith'));

$func.placeholder = require('./placeholder');
return $func;

