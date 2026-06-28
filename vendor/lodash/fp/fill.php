<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('fill', require('../fill'));

$func.placeholder = require('./placeholder');
return $func;

