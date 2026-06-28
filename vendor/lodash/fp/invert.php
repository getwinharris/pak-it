<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('invert', require('../invert'));

$func.placeholder = require('./placeholder');
return $func;

