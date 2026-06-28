<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('isMatchWith', require('../isMatchWith'));

$func.placeholder = require('./placeholder');
return $func;

