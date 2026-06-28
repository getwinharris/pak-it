<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mergeAllWith', require('../mergeWith'));

$func.placeholder = require('./placeholder');
return $func;

