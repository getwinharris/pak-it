<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('set', require('../set'));

$func.placeholder = require('./placeholder');
return $func;

