<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('bind', require('../bind'));

$func.placeholder = require('./placeholder');
return $func;

