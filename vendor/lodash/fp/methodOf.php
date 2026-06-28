<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('methodOf', require('../methodOf'));

$func.placeholder = require('./placeholder');
return $func;

