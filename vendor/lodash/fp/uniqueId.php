<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('uniqueId', require('../uniqueId'));

$func.placeholder = require('./placeholder');
return $func;

