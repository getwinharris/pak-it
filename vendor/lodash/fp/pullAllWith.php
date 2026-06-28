<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pullAllWith', require('../pullAllWith'));

$func.placeholder = require('./placeholder');
return $func;

