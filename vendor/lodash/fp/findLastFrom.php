<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findLastFrom', require('../findLast'));

$func.placeholder = require('./placeholder');
return $func;

