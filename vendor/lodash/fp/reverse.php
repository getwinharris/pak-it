<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('reverse', require('../reverse'));

$func.placeholder = require('./placeholder');
return $func;

