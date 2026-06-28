<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('rest', require('../rest'));

$func.placeholder = require('./placeholder');
return $func;

