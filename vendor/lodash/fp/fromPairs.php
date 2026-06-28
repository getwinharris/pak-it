<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('fromPairs', require('../fromPairs'));

$func.placeholder = require('./placeholder');
return $func;

