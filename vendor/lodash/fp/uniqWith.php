<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('uniqWith', require('../uniqWith'));

$func.placeholder = require('./placeholder');
return $func;

