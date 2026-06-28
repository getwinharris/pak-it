<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('propertyOf', require('../get'));

$func.placeholder = require('./placeholder');
return $func;

