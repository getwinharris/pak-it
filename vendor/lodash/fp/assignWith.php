<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignWith', require('../assignWith'));

$func.placeholder = require('./placeholder');
return $func;

