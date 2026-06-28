<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('merge', require('../merge'));

$func.placeholder = require('./placeholder');
return $func;

