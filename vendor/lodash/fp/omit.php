<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('omit', require('../omit'));

$func.placeholder = require('./placeholder');
return $func;

