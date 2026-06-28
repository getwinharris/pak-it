<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findLast', require('../findLast'));

$func.placeholder = require('./placeholder');
return $func;

