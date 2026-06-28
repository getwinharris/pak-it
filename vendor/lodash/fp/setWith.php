<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('setWith', require('../setWith'));

$func.placeholder = require('./placeholder');
return $func;

