<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('multiply', require('../multiply'));

$func.placeholder = require('./placeholder');
return $func;

