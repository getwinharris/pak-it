<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('memoize', require('../memoize'));

$func.placeholder = require('./placeholder');
return $func;

