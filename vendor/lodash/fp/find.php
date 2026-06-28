<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('find', require('../find'));

$func.placeholder = require('./placeholder');
return $func;

