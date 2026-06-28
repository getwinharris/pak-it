<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('reduce', require('../reduce'));

$func.placeholder = require('./placeholder');
return $func;

