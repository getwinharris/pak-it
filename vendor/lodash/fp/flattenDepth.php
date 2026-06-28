<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flattenDepth', require('../flattenDepth'));

$func.placeholder = require('./placeholder');
return $func;

