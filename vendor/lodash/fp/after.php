<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('after', require('../after'));

$func.placeholder = require('./placeholder');
return $func;

