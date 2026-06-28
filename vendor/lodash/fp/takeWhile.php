<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('takeWhile', require('../takeWhile'));

$func.placeholder = require('./placeholder');
return $func;

