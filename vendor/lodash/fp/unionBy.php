<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unionBy', require('../unionBy'));

$func.placeholder = require('./placeholder');
return $func;

