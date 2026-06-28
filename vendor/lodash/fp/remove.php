<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('remove', require('../remove'));

$func.placeholder = require('./placeholder');
return $func;

