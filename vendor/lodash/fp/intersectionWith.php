<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('intersectionWith', require('../intersectionWith'));

$func.placeholder = require('./placeholder');
return $func;

