<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flatMap', require('../flatMap'));

$func.placeholder = require('./placeholder');
return $func;

