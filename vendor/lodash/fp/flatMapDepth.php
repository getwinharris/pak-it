<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flatMapDepth', require('../flatMapDepth'));

$func.placeholder = require('./placeholder');
return $func;

