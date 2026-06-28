<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findFrom', require('../find'));

$func.placeholder = require('./placeholder');
return $func;

