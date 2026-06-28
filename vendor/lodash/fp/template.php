<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('template', require('../template'));

$func.placeholder = require('./placeholder');
return $func;

