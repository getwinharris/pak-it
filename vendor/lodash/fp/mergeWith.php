<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mergeWith', require('../mergeWith'));

$func.placeholder = require('./placeholder');
return $func;

