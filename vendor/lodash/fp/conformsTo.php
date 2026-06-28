<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('conformsTo', require('../conformsTo'));

$func.placeholder = require('./placeholder');
return $func;

