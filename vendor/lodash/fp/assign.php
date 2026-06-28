<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assign', require('../assign'));

$func.placeholder = require('./placeholder');
return $func;

