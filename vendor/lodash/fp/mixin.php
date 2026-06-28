<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mixin', require('../mixin'));

$func.placeholder = require('./placeholder');
return $func;

