<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('zip', require('../zip'));

$func.placeholder = require('./placeholder');
return $func;

