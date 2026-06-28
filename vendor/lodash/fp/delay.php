<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('delay', require('../delay'));

$func.placeholder = require('./placeholder');
return $func;

