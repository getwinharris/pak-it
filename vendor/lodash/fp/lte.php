<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('lte', require('../lte'));

$func.placeholder = require('./placeholder');
return $func;

