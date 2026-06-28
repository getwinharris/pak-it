<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('tap', require('../tap'));

$func.placeholder = require('./placeholder');
return $func;

