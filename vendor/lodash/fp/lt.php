<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('lt', require('../lt'));

$func.placeholder = require('./placeholder');
return $func;

