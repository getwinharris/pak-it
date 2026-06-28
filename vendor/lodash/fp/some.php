<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('some', require('../some'));

$func.placeholder = require('./placeholder');
return $func;

