<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('invoke', require('../invoke'));

$func.placeholder = require('./placeholder');
return $func;

