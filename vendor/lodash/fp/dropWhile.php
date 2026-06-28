<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('dropWhile', require('../dropWhile'));

$func.placeholder = require('./placeholder');
return $func;

